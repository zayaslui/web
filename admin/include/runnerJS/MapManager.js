
Runner.controls.MapManager=Runner.extend(Runner.emptyFn,{id:-1,tName:'',pageObj:null,mapsData:{},mainMapIds:[],fieldMapsIds:[],fieldsAsMap:{},markerAsLink:true,markerAsEditLink:false,showViewInPopup:false,showEditInPopup:false,centerLinkText:'',bigMapDefZoom:5,littleMapDefZoom:5,providerMap:null,constructor:function(cfg){Runner.apply(this,cfg);Runner.controls.MapManager.superclass.constructor.call(this,cfg);if(!Runner.isMobile){this.showViewInPopup=Runner.pages.PageSettings.getTableData(this.tName,"showViewInPopup");this.showEditInPopup=Runner.pages.PageSettings.getTableData(this.tName,"showEditInPopup");}
this.providerMap=this.getMapProvider();},getMapProvider:function(){switch(Runner.pages.PageSettings.getGlobalData("mapProvider")){case Runner.controls.constants.GOOGLE_MAPS:return new Runner.controls.gMap();case Runner.controls.constants.OPEN_STREET_MAPS:return new Runner.controls.osMap();case Runner.controls.constants.BING_MAPS:return new Runner.controls.bingMap();}},init:function(mapsData){this.mapsData=mapsData||this.mapsData;for(var mapId in this.mapsData){if(!this.mapsData[mapId].skipped){this.initMap(mapId);}
if(this.isHeatMap(this.mapsData[mapId])){this.initHeatMap(mapId);}}
this.initCenterLinks();},reinit:function(mapsData,fieldMapsIds){this.fieldMapsIds=fieldMapsIds||this.fieldMapsIds;this.init(mapsData);},initMap:function(mapId,onMapLoadHandler){var $mapElem=$('#'+mapId),mapData=this.mapsData[mapId];if(!$mapElem.length||!mapData){return false;}
if((mapData.type=='BIG_MAP'||mapData.type=='DASH_MAP')&&(mapData.zoom==="auto"||typeof mapData.zoom==="undefined")){mapData.autoZoom=true;}
if(typeof mapData.zoom==="undefined"||mapData.autoZoom){mapData.zoom=(mapData.type=='BIG_MAP'||mapData.type=='DASH_MAP')?this.bigMapDefZoom:this.littleMapDefZoom;}
mapData.map=this.providerMap.createMap($mapElem,mapData.zoom,mapData.centerLat,mapData.centerLng);this.initMarkers(mapData);this.setMapCenteredByMarkers(mapData);if(typeof onMapLoadHandler==="function"){this.providerMap.addOnMapLoadHandler(mapData.map,onMapLoadHandler);}},isHeatMap:function(mapData){return this.providerMap.mapIsHeatmap(mapData);},initHeatMap:function(mapId){this.providerMap.initHeatMap(this.mapsData[mapId]);},getBoundMarkers:function(mapData){var markersExists=false,markers=mapData.markers,minLat,minLng,maxLat,maxLng,i,minLatID,minLngID,maxLatID,maxLngID;for(i=0;i<markers.length;i++){if(markers[i].detached||markers[i].lat==''||markers[i].lng==''||(this.isHeatMap(mapData)&&mapData.weightField&&markers[i].weight<=0)){continue;}
if(!markersExists){markersExists=true;minLatID=minLngID=maxLatID=maxLngID=i;minLat=markers[i].lat;minLng=markers[i].lng;maxLat=markers[i].lat;maxLng=markers[i].lng;}else{minLatID=minLat>markers[i].lat?i:minLatID;minLngID=minLng>markers[i].lng?i:minLngID;maxLatID=maxLat<markers[i].lat?i:maxLatID;maxLngID=maxLng<markers[i].lng?i:maxLngID;minLat=minLat>markers[i].lat?markers[i].lat:minLat;minLng=minLng>markers[i].lng?markers[i].lng:minLng;maxLat=maxLat<markers[i].lat?markers[i].lat:maxLat;maxLng=maxLng<markers[i].lng?markers[i].lng:maxLng;}}
if(!markersExists){return null;}
return{minLatID:minLatID,minLngID:minLngID,maxLatID:maxLatID,maxLngID:maxLngID,minLat:minLat,minLng:minLng,maxLat:maxLat,maxLng:maxLng,};},initCenter:function(mapData){var cenLat=0,cenLng=0,markersCount=0,markers=mapData.markers||[],boundLatLng;if(!mapData.map||!markers.length){return;}
if(!mapData.zoom&&mapData.zoom!==0){mapData.zoom=(mapData.type=='BIG_MAP'||mapData.type=='DASH_MAP')?this.bigMapDefZoom:this.littleMapDefZoom;}
boundLatLng=this.getBoundMarkers(mapData);if(boundLatLng){cenLat=this.providerMap.parseValue(boundLatLng.minLat)+this.providerMap.parseValue(boundLatLng.maxLat);cenLng=this.providerMap.parseValue(boundLatLng.minLng)+this.providerMap.parseValue(boundLatLng.maxLng);markersCount=2;}
if(markersCount===0){if(mapData.type=='FIELD_MAP'&&markers[0].address){this.providerMap.setCenter(markers[0].address,mapData.map,mapData.zoom);}
markersCount=1;}
this.providerMap.setMapCenter(mapData.map,mapData.zoom,cenLat/markersCount,cenLng/markersCount);},setZoomAuto:function(mapData){if(!mapData.markers||!mapData.map){return false;}
this.providerMap.setZoomAuto(mapData.map,mapData.markers,this.getBoundMarkers(mapData));if(mapData.map.getZoom()>18){this.providerMap.setZoom(mapData.map,18);}},setCenter:function(mapId,lat,lng){var mapData=this.mapsData[mapId];if(!mapData||!mapData.map){return false;}
if(mapData.zoom===undefined){mapData.zoom=(mapData.type=='BIG_MAP'||mapData.type=='DASH_MAP')?this.bigMapDefZoom:this.littleMapDefZoom;}
this.providerMap.setMapCenter(mapData.map,mapData.zoom,lat,lng);},setMapCenteredByMarkers:function(mapData){if(mapData.autoZoom){this.setZoomAuto(mapData);}else{this.initCenter(mapData);}},initCenterLinks:function(){this.initCenterLink($("a[type='centerOnMarker"+this.id+"']"));},initCenterLink:function($link){var mapManager=this;$link.on('click',function(e){mapManager.centerOnMarker($(this).attr('recId'));return false;});},getCenterLink:function(id,val,type){var $link=$('<a href="#" recId="'+id+'" type="centerOnMarker'+this.id+'"></a>');this.initCenterLink($link);if(type==2){return $link.html(val);}
if(type==1){return $link.html(this.centerLinkText);}
return $link;},initMarkers:function(mapData){for(var i=0;i<(mapData.markers||[]).length;i++){this.initMarker(mapData,mapData.markers[i]);}
if(mapData.clustering){this.markerClusterer=this.providerMap.initializeClusterMarkers(mapData);}},initMarker:function(mapData,markerData){if(markerData.lat!==''&&markerData.lng!==''){this.addMarkerByCoords(markerData,mapData);return;}
if(markerData.address){this.addMarkerByAddress(markerData,mapData);}},addOnMarkerClickHandler:function(marker,handler){this.providerMap.addOnMarkerClickHandler(marker,handler);},triggerMarkerClickEvent:function(marker){if(marker){this.providerMap.triggerMarkerClickEvent(marker);}},addMarkerClickEvent:function(marker,markerData,markerAsEditLink){var mapManager=this;if(!markerData.link||!this.markerAsLink){return;}
if(this.providerMap.isClusterHandlerToAdd(markerData)){this.providerMap.addOnMarkerClickHandler(marker,function(){mapManager.providerMap.clusterHandler(markerData);});return;}
if(markerAsEditLink&&this.showEditInPopup){this.providerMap.addOnMarkerClickHandler(marker,function(){$("#editLink"+markerData.recId).click();});return;}
if(this.showViewInPopup){this.providerMap.addOnMarkerClickHandler(marker,function(){var inlineObj=mapManager.pageObj.inlineEdit||mapManager.pageObj.inlineAdd||null,pageParams={tName:mapManager.tName,pageType:Runner.pages.constants.PAGE_VIEW,keys:markerData.keys,modal:true,dashGridBased:inlineObj&&inlineObj.dashGridBased,baseParams:{parId:mapManager.id,table:escape(mapManager.tName)},inlineObjectParams:{getInlineObject:function(){return inlineObj;},rowId:markerData.recId}};Runner.pages.PageManager.openPage(pageParams);});return;}
this.providerMap.addOnMarkerClickHandler(marker,function(){window.location.href=markerData.link;});},getActiveMarkerData:function(mapId){var idx=this.getActiveMarkerIndex(mapId);return idx===-1?null:this.mapsData[mapId].markers[idx];},getPrevNextActiveMarkerData:function(goForward,mapId){var mapData=this.mapsData[mapId],idx=this.getActiveMarkerIndex(mapId),i;if(idx===-1){return null;}
if(goForward){for(i=idx+1;i<mapData.markers.length;i++){if(!mapData.markers[i].detached){return mapData.markers[i];}}}else{for(i=idx;i--;){if(!mapData.markers[i].detached){return mapData.markers[i];}}}
return null;},getActiveMarkerIndex:function(mapId){var mapData=this.mapsData[mapId],i;for(i=0;i<(mapData.markers||[]).length;i++){if(mapData.markers[i].active){return i;}}
return-1;},setMarkerActive:function(markerData,mapId,keys){var mapData=this.mapsData[mapId];markerData=markerData||this.getMarkerDataByKeys(mapId,keys);if(!markerData||markerData.active){return;}
this.setAllMarkerInactive(mapId);markerData.active=true;this.providerMap.setMarkerActive(markerData.marker,!!markerData.mapIcon);},setAllMarkerInactive:function(mapId){var activeMarkerData=this.getActiveMarkerData(mapId);if(activeMarkerData){activeMarkerData.active=false;this.providerMap.setMarkerInactive(activeMarkerData.marker,!!activeMarkerData.mapIcon);}},getMarkerDataByRecId:function(mapId,recId){var mapData=this.mapsData[mapId],i;for(var i=0;i<(mapData.markers||[]).length;i++){if(mapData.markers[i].recId===recId){return mapData.markers[i];}}
return null;},getMarkerDataByKeys:function(mapId,keys,useDetached){var mapData=this.mapsData[mapId],i;if(!keys){return null;}
for(var i=0;i<(mapData.markers||[]).length;i++){if(Runner.arraysEqual(keys,mapData.markers[i].keys,true)&&(useDetached||!mapData.markers[i].detached)){return mapData.markers[i];}}
return null;},addMarkerByCoords:function(markerData,mapData){if(!mapData.map){return;}
this.providerMap.setMarkerByCoords(markerData,mapData);if(!this.isHeatMap(mapData)){this.addMarkerClickEvent(markerData.marker,markerData,mapData.markerAsEditLink);}},addMarkerByAddress:function(markerData,mapData){if(!mapData.map){return false;}
var mapManager=this;this.providerMap.setMarkerByAddress(markerData,mapData,function(){if(!mapManager.isHeatMap(mapData)){mapManager.addMarkerClickEvent(markerData.marker,markerData,mapData.markerAsEditLink);}
mapManager.setMapCenteredByMarkers(mapData);});},updateAfterEdit:function(recId,recordData,oldKeys){var mapId,markers,i,fieldsData,mapData;for(mapId in this.mapsData){mapData=this.mapsData[mapId];markers=mapData.markers;if(mapData.skipped||!markers){continue;}
for(i=0;i<markers.length;i++){if(oldKeys&&!Runner.arraysEqual(oldKeys,markers[i].keys,true)||!oldKeys&&markers[i].recId!==recId){continue;}
fieldsData=(mapData.type=='BIG_MAP'||mapData.type=='DASH_MAP')?mapData:this.fieldsAsMap[mapData.fName];markers[i].lat=recordData[fieldsData.latField]||'';markers[i].lng=recordData[fieldsData.lngField]||'';markers[i].desc=recordData[fieldsData.descField]||'';markers[i].address=recordData[fieldsData.addressField]||'';markers[i].weight=recordData[fieldsData.weightField]||'';markers[i].link=this.getMarkerLink(recordData.keys,mapData.markerAsEditLink);markers[i].keys=recordData.keys;}
if(mapData.clustering){this.mapsData[mapId].clusterMarkers=[];}}
this.refreshMaps(recId,recordData.keys);},refreshMarker:function(mapId,ind){var mapData=this.mapsData[mapId],markerData=this.mapsData[mapId].markers[ind];if(!mapData.map){return;}
this.destroyMarker(mapData.map,markerData.marker);this.initMarker(mapData,mapData.markers[ind]);if(mapData.dashMap&&markerData.active){markerData.active=false;this.setMarkerActive(markerData,mapId);}},destroyMarker:function(map,marker){this.providerMap.destroyMarker(map,marker);delete marker;},newMarkerWasAdded:function(mapId){return this.mapsData[mapId]&&this.mapsData[mapId].newMarkerWasAdded;},updateAfterAdd:function(recId,recordData){var mapId,mapData,markerData,fName;for(mapId in this.mapsData){mapData=this.mapsData[mapId];if(mapData.type!=="BIG_MAP"&&mapData.type!=="DASH_MAP"||mapData.skipped){continue;}
markerData={recId:recId,lat:recordData[mapData.latField]||'',lng:recordData[mapData.lngField]||'',desc:recordData[mapData.descField]||'',address:recordData[mapData.addressField]||'',weight:recordData[mapData.weightField]||'',link:this.getMarkerLink(recordData.keys,mapData.markerAsEditLink),keys:recordData.keys,mapIcon:mapData.mapIcon};mapData.markers=mapData.markers||[];mapData.markers.unshift(markerData);if(mapData.clustering||this.isHeatMap(mapData)){this.mapsData[mapId].clusterMarkers=[];this.initMap(mapId);if(this.isHeatMap(mapData)){this.initHeatMap(mapId);}}else{this.initMarker(mapData,markerData);}
if(mapData.dashMap){this.setMarkerActive(markerData,mapId);if(!this.mapBoundsContains(markerData,mapData.map)){mapData.newMarkerWasAdded=true;this.setMapCenteredByMarkers(mapData);setTimeout(function(){delete mapData.newMarkerWasAdded;},1000);}}}
for(fName in this.fieldsAsMap){mapId=this.getMapDivId("FIELD_MAP",recId,fName);this.mapsData[mapId]={markers:[{recId:recId,lat:recordData[this.fieldsAsMap[fName].latField]||'',lng:recordData[this.fieldsAsMap[fName].lngField]||'',desc:recordData[this.fieldsAsMap[fName].descField]||'',address:recordData[this.fieldsAsMap[fName].addressField]||'',link:this.getMarkerLink(recordData.keys),keys:recordData.keys,mapIcon:this.fieldsAsMap[fName].mapIcon}],fName:fName,map:null,mapFieldValue:recordData[fName],type:'FIELD_MAP',zoom:this.fieldsAsMap[fName].zoom};}},mapBoundsContains:function(markerData,map){return markerData.marker&&map&&this.providerMap.mapBoundsContains(markerData.marker,map);},getMarkerLink:function(keys,markerAsEditLink){if(markerAsEditLink&&Runner.pages.PageSettings.getTableData(this.tName,"editAvailable")){return Runner.pages.getUrl(this.tName,Runner.pages.constants.PAGE_EDIT,keys);}else if(Runner.pages.PageSettings.getTableData(this.tName,"viewAvailable")){return Runner.pages.getUrl(this.tName,Runner.pages.constants.PAGE_VIEW,keys);}},refreshMaps:function(recId,keys){var mapId,mapData,markers,i;for(mapId in this.mapsData){mapData=this.mapsData[mapId];markers=mapData.markers;if(!markers||mapData.skipped){continue;}
if(mapData.clustering||this.isHeatMap(mapData)){this.initMap(mapId);if(this.isHeatMap(mapData)){this.initHeatMap(mapId);}
continue;}
for(i=0;i<markers.length;i++){if(recId===undefined||markers[i].recId==recId||keys&&Runner.arraysEqual(keys,markers[i].keys,true)){this.refreshMarker(mapId,i);}}
this.setMapCenteredByMarkers(mapData);}},isFieldIsMap:function(fName){return this.fieldsAsMap[fName]!==undefined;},getMapDivId:function(type,recId,fName){if(type=="FIELD_MAP"){return"littleMap_"+Runner.goodFieldName(fName)+'_'+recId;}
return recId;},getMapDiv:function(type,id,fName){var mapDivId=this.getMapDivId(type,id,fName),mapDiv=$('<div id="'+mapDivId+'" class=littleMap></div>');if(!this.mapsData[mapDivId]){return mapDiv;}
if(this.mapsData[mapDivId].type!=='FIELD_MAP'){return mapDiv.css({'width':this.mapsData[mapDivId].width,'height':this.mapsData[mapDivId].height});}
return mapDiv.css({'width':this.fieldsAsMap[fName].width,'height':this.fieldsAsMap[fName].height});},centerOnMarker:function(recId){var mapId,markers,i,mapData;for(mapId in this.mapsData){if(this.mapsData[mapId].type!='BIG_MAP'&&this.mapsData[mapId].type!='DASH_MAP'||this.mapsData[mapId].skipped){continue;}
markers=this.mapsData[mapId].markers;for(i=0;i<markers.length;i++){if(markers[i].recId!=recId||!this.mapsData[mapId].map){continue;}
if(this.mapsData[mapId].zoom===undefined){this.mapsData[mapId].zoom=this.bigMapDefZoom;}
if(markers[i].lat!=''&&markers[i].lng!=''){this.providerMap.setMapCenter(this.mapsData[mapId].map,this.mapsData[mapId].zoom,this.providerMap.parseValue(markers[i].lat),this.providerMap.parseValue(markers[i].lng));break;}
if(markers[i].address){mapData=this.mapsData[mapId];this.providerMap.setCenter(markers[i].address,mapData);break;}}}},isFieldCenterLink:function(fName){var fieldsAsCenterLink=[],linkType=false,mapId,i;for(mapId in this.mapsData){if(this.mapsData[mapId].type!='BIG_MAP'&&this.mapsData[mapId].type!='DASH_MAP'||!this.mapsData[mapId].showCenterLink||this.mapsData[mapId].skipped){continue;}
fieldsAsCenterLink.push({addressField:this.mapsData[mapId].addressField,linkType:this.mapsData[mapId].showCenterLink});if(this.mapsData[mapId].addressField==fName){linkType=this.mapsData[mapId].showCenterLink;}}
this.isFieldCenterLink=function(fName){for(i=0;i<fieldsAsCenterLink.length;i++){if(fieldsAsCenterLink[i].addressField==fName){return fieldsAsCenterLink[i].linkType;}}
return false;}
return linkType;},getBigMap:function(mapName){var mapId;if(typeof mapName!=="undefined"&&this.mapsData[mapName]){return this.mapsData[mapName].map;}
if(typeof mapName==="undefined"){for(mapId in this.mapsData){if(this.mapsData[mapId].type==="BIG_MAP"||this.mapsData[mapId].type==="DASH_MAP"){return this.mapsData[mapId].map;}}}},initInlineMapOrCenterLink:function(fName,recId,caption,refresh){var $span,$mapDiv,$mapCenterLink;if(this.isFieldIsMap(fName)){$span=Runner.getFieldSpan(fName,recId).html('');$mapDiv=this.getMapDiv("FIELD_MAP",recId,fName).appendTo($span);this.initMap($mapDiv.attr("id"));if(refresh){this.refreshMaps(recId);}
return;}
if(this.isFieldCenterLink(fName)){$span=Runner.getFieldSpan(fName,recId).html('');$mapCenterLink=this.getCenterLink(recId,caption,this.isFieldCenterLink(fName)).appendTo($span);}},updateLittleMaps:function(){var mapData,i;for(i=0;i<this.fieldMapsIds.length;i++){mapData=this.mapsData[this.fieldMapsIds[i]];this.providerMap.triggerResizeEvent(mapData.map);this.setMapCenteredByMarkers(mapData);}},updateMapsOnEditCancel:function(row,fieldNames){for(var i=0;i<fieldNames.length;i++){if(this.isFieldIsMap(fieldNames[i])){this.initMap(this.getMapDivId("FIELD_MAP",row.id,fieldNames[i]));}}},updateMapsOnAfterEditSubmit:function(vals,fields,keys,recId,data){var recordVals=Runner.apply({keys:keys},data.rawVals),i;for(i=0;i<fields.length;i++){this.initInlineMapOrCenterLink(fields[i],recId,vals[fields[i]]);}
this.updateAfterEdit(recId,recordVals);},updateMapsOnAfterAddSubmit:function(vals,fields,keys,recId,data){var recordVals=Runner.apply({keys:keys},data.rawVals),i;this.updateAfterAdd(recId,recordVals);for(i=0;i<fields.length;i++){this.initInlineMapOrCenterLink(fields[i],recId,vals[fields[i]],true);}},reInitMapsData:function(mapsData){this.mapsData=mapsData;},deleteSelectedMarkers:function(mapId,keyStrings){var mapData=this.mapsData[mapId],markersData=[],i;if(!mapData.map||!mapData.markers||!mapData.markers.length){return;}
for(i=0;i<mapData.markers.length;i++){if($.inArray(mapData.markers[i].keys.join("&"),keyStrings)!==-1){this.destroyMarker(mapData.map,mapData.markers[i].marker);}else{markersData.push(mapData.markers[i]);}}
mapData.markers=markersData;},_reinitMapMarkers:function(mapId,newMarkersData,updateCenter,destroyOldMarkers){var mapData=this.mapsData[mapId],activeMarkerData;if(!mapData.map){return;}
newMarkersData=newMarkersData||[];if(mapData.dashMap){activeMarkerData=this.getActiveMarkerData(mapId);}
this.destroyMapMarkers(mapId);mapData.markers=newMarkersData;this.initMarkers(mapData);if(mapData.dashMap){activeMarkerData=activeMarkerData&&this.getMarkerDataByKeys(mapId,activeMarkerData.keys)||mapData.markers[0];this.setMarkerActive(activeMarkerData,mapId);}
if(updateCenter){this.setMapCenteredByMarkers(mapData);}},reinitMapMarkers:function(mapId,newMarkersData,updateCenter,notDestroyOldMarkers){var mapData=this.mapsData[mapId],activeMarkerData;if(!mapData.map){return;}
newMarkersData=newMarkersData||[];if(mapData.dashMap){activeMarkerData=this.getActiveMarkerData(mapId);}
this.updateMapMarkersData(mapId,newMarkersData,notDestroyOldMarkers);if(mapData.dashMap){activeMarkerData=activeMarkerData&&this.getMarkerDataByKeys(mapId,activeMarkerData.keys)||this.getFirtMarkerData(mapId);this.setMarkerActive(activeMarkerData,mapId);}
if(updateCenter&&!notDestroyOldMarkers){this.setMapCenteredByMarkers(mapData);}},getFirtMarkerData:function(mapId){var mapData=this.mapsData[mapId],i;if(!mapData.dashMap){return mapData.markers[0];}
for(var i=0;i<mapData.markers.length;i++){if(!mapData.markers[i].detached){return mapData.markers[i];}}
return null;},updateMapMarkersData:function(mapId,newMarkersData,notDestroyOldMarkers){var mapData=this.mapsData[mapId],markersToInit=[],markersData=[],i;if(!notDestroyOldMarkers){this.destroyMapMarkers(mapId);mapData.markers=newMarkersData;this.initMarkers(mapData);return;}
if(!mapData.dashMap){return;}
this.setAllMarkerInactive(mapId);for(i=0;i<newMarkersData.length;i++){if(!this.checkIfMarkerDataInByKeys(newMarkersData[i].keys,mapData.markers)){markersToInit.push(newMarkersData[i]);}else{markersData.push(this.getMarkerDataByKeys(mapId,newMarkersData[i].keys,true));}}
for(i=0;i<markersToInit.length;i++){this.initMarker(mapData,markersToInit[i]);}
markersData=markersData.concat(markersToInit);for(i=0;i<mapData.markers.length;i++){mapData.markers[i].detached=!this.checkIfMarkerDataInByKeys(mapData.markers[i].keys,newMarkersData);if(mapData.markers[i].detached){markersData.push(mapData.markers[i]);}};mapData.markers=markersData;},hasMarkers:function(mapId){var mapData=this.mapsData[mapId],i;for(i=0;i<mapData.markers.length;i++){if(!mapData.markers[i].detached){return true;}}
return false;},checkIfMarkerDataInByKeys:function(keys,markersData){for(var i=0;i<markersData.length;i++){if(Runner.arraysEqual(keys,markersData[i].keys,true)){return true;}}
return false;},getMarker:function(mapId,keys){var markerData=this.getMarkerDataByKeys(mapId,keys);return markerData?markerData.marker:null;},destroyMapMarkers:function(mapId){var mapData=this.mapsData[mapId],i;if(!mapData.markers){return;}
for(i=0;i<mapData.markers.length;i++){this.destroyMarker(mapData.map,mapData.markers[i].marker);}
mapData.markers=[];},getMapViewPortCoordinates:function(mapId){var mapData=this.mapsData[mapId];return this.providerMap.getMapViewPortCoordinates(mapData.map);},onMapViewPortChanged:function(mapId,handler){this.providerMap.addOnMapViewPortChangedHandler(this.mapsData[mapId].map,handler);}});Runner.GmapLoader=function(){var stack=[],stackContext=[],isLoaded=false;this.loadGMapScript=function(APIkey){var script=document.createElement("script"),lang=Runner.getGoogleLanguage(),langStr=lang?"&language="+lang:"",sensor=Runner.isMobile?"true":"false";if(APIkey!=''){script.src=location.protocol+"//maps.googleapis.com/maps/api/js?key="+APIkey+"&sensor="+sensor+langStr+"&callback=Runner.globalGmapLoader.mapsLoaded&libraries=visualization,geometry";}else{script.src=location.protocol+"//maps.googleapis.com/maps/api/js?sensor="+sensor+langStr+"&callback=Runner.globalGmapLoader.mapsLoaded&libraries=visualization,geometry";}
script.type="text/javascript";document.getElementsByTagName("head")[0].appendChild(script);}
this.onLoad=function(f,context){stack.push(f);stackContext.push(context);if(this.isLoaded){this.fireLoad();}}
this.fireLoad=function(){for(var i=0;i<stack.length;i++){stack[i].apply(stackContext[i]||this);}
stack=[];stackContext=[];}
this.mapsLoaded=function(){this.isLoaded=true;this.fireLoad();}};(function(){Runner.globalGmapLoader=new Runner.GmapLoader();if(window.settings['global'].mapProvider===Runner.controls.constants.GOOGLE_MAPS){Runner.globalGmapLoader.loadGMapScript(window.settings['global'].googleMapsApiCode);return;}
Runner.globalGmapLoader.mapsLoaded();}());