var _$_94bd=["_forms","_getWordObject","_wordInputStr","_adjustIndexes","_isWordChar","_lastPos","wordChar","windowType","wordWindow","originalSpellings","suggestions","checkWordBgColor","pink","normWordBgColor","white","text","","textInputs","indexes","resetForm","totalMisspellings","totalWords","totalPreviousWords","getTextVal","setFocus","removeFocus","setText","writeBody","printForHtml","length","reset","value","type","focus","backgroundColor","style","blur","substring","size","document","open","<form name=\"textInput","\">","writeln","<div class=\"plainText\">","indexOf","charAt","write","substr","</div>","</form>","forms","close","search","elements","<input readonly ","class=\"blend\" type=\"text\" value=\"","\" size=\""];function wordWindow(){this[_$_94bd[0]]= [];this[_$_94bd[1]]= _getWordObject;this[_$_94bd[2]]= _wordInputStr;this[_$_94bd[3]]= _adjustIndexes;this[_$_94bd[4]]= _isWordChar;this[_$_94bd[5]]= _lastPos;this[_$_94bd[6]]= /[a-zA-Z]/;this[_$_94bd[7]]= _$_94bd[8];this[_$_94bd[9]]=  new Array();this[_$_94bd[10]]=  new Array();this[_$_94bd[11]]= _$_94bd[12];this[_$_94bd[13]]= _$_94bd[14];this[_$_94bd[15]]= _$_94bd[16];this[_$_94bd[17]]=  new Array();this[_$_94bd[18]]=  new Array();this[_$_94bd[19]]= resetForm;this[_$_94bd[20]]= totalMisspellings;this[_$_94bd[21]]= totalWords;this[_$_94bd[22]]= totalPreviousWords;this[_$_94bd[23]]= getTextVal;this[_$_94bd[24]]= setFocus;this[_$_94bd[25]]= removeFocus;this[_$_94bd[26]]= setText;this[_$_94bd[27]]= writeBody;this[_$_94bd[28]]= printForHtml}function resetForm(){if(this[_$_94bd[0]]){for(var i=0;i< this[_$_94bd[0]][_$_94bd[29]];i++){this[_$_94bd[0]][i][_$_94bd[30]]()}};return true}function totalMisspellings(){var _0x3A95D=0;for(var i=0;i< this[_$_94bd[17]][_$_94bd[29]];i++){_0x3A95D+= this[_$_94bd[21]](i)};return _0x3A95D}function totalWords(_0x7A29){return this[_$_94bd[9]][_0x7A29][_$_94bd[29]]}function totalPreviousWords(_0x7A29,_0x7A8C){var _0x3A95D=0;for(var i=0;i<= _0x7A29;i++){for(var _0x7C18=0;_0x7C18< this[_$_94bd[21]](i);_0x7C18++){if(i== _0x7A29&& _0x7C18== _0x7A8C){break}else {_0x3A95D++}}};return _0x3A95D}function getTextVal(_0x7A29,_0x7A8C){var _0x811F=this[_$_94bd[1]](_0x7A29,_0x7A8C);if(_0x811F){return _0x811F[_$_94bd[31]]}}function setFocus(_0x7A29,_0x7A8C){var _0x811F=this[_$_94bd[1]](_0x7A29,_0x7A8C);if(_0x811F){if(_0x811F[_$_94bd[32]]== _$_94bd[15]){_0x811F[_$_94bd[33]]();_0x811F[_$_94bd[35]][_$_94bd[34]]= this[_$_94bd[11]]}}}function removeFocus(_0x7A29,_0x7A8C){var _0x811F=this[_$_94bd[1]](_0x7A29,_0x7A8C);if(_0x811F){if(_0x811F[_$_94bd[32]]== _$_94bd[15]){_0x811F[_$_94bd[36]]();_0x811F[_$_94bd[35]][_$_94bd[34]]= this[_$_94bd[13]]}}}function setText(_0x7A29,_0x7A8C,_0x7FF6){var _0x811F=this[_$_94bd[1]](_0x7A29,_0x7A8C);var _0x38D85;var _0x38DE8;if(_0x811F){var _0x58E7=this[_$_94bd[18]][_0x7A29][_0x7A8C];var _0x38E4B=_0x811F[_$_94bd[31]];_0x38D85= this[_$_94bd[17]][_0x7A29][_$_94bd[37]](0,_0x58E7);_0x38DE8= this[_$_94bd[17]][_0x7A29][_$_94bd[37]](_0x58E7+ _0x38E4B[_$_94bd[29]],this[_$_94bd[17]][_0x7A29][_$_94bd[29]]);this[_$_94bd[17]][_0x7A29]= _0x38D85+ _0x7FF6+ _0x38DE8;var _0x79C6=_0x7FF6[_$_94bd[29]]- _0x38E4B[_$_94bd[29]];this[_$_94bd[3]](_0x7A29,_0x7A8C,_0x79C6);_0x811F[_$_94bd[38]]= _0x7FF6[_$_94bd[29]];_0x811F[_$_94bd[31]]= _0x7FF6;this[_$_94bd[25]](_0x7A29,_0x7A8C)}}function writeBody(){var _0xD94B=window[_$_94bd[39]];var _0x3BC50=false;_0xD94B[_$_94bd[40]]();for(var _0x7F30=0;_0x7F30< this[_$_94bd[17]][_$_94bd[29]];_0x7F30++){var _0x3BBED=0;var _0x3BB8A=0;_0xD94B[_$_94bd[43]](_$_94bd[41]+ _0x7F30+ _$_94bd[42]);var _0x3BD16=this[_$_94bd[17]][_0x7F30];this[_$_94bd[18]][_0x7F30]= [];if(_0x3BD16){var _0x3BCB3=this[_$_94bd[9]][_0x7F30];if(!_0x3BCB3){break};_0xD94B[_$_94bd[43]](_$_94bd[44]);for(var i=0;i< _0x3BCB3[_$_94bd[29]];i++){do{_0x3BB8A= _0x3BD16[_$_94bd[45]](_0x3BCB3[i],_0x3BBED);_0x3BBED= _0x3BB8A+ _0x3BCB3[i][_$_94bd[29]];if(_0x3BB8A==  -1){break};var _0x3BB27=_0x3BD16[_$_94bd[46]](_0x3BB8A- 1);var _0x3BAC4=_0x3BD16[_$_94bd[46]](_0x3BBED)}while(this[_$_94bd[4]](_0x3BB27)|| this[_$_94bd[4]](_0x3BAC4));;this[_$_94bd[18]][_0x7F30][i]= _0x3BB8A;for(var _0x7C18=this[_$_94bd[5]](_0x7F30,i);_0x7C18< _0x3BB8A;_0x7C18++){_0xD94B[_$_94bd[47]](this[_$_94bd[28]](_0x3BD16[_$_94bd[46]](_0x7C18)))};_0xD94B[_$_94bd[47]](this[_$_94bd[2]](_0x3BCB3[i]));if(i== _0x3BCB3[_$_94bd[29]]- 1){_0xD94B[_$_94bd[47]](printForHtml(_0x3BD16[_$_94bd[48]](_0x3BBED)))}};_0xD94B[_$_94bd[43]](_$_94bd[49])};_0xD94B[_$_94bd[43]](_$_94bd[50])};this[_$_94bd[0]]= _0xD94B[_$_94bd[51]];_0xD94B[_$_94bd[52]]()}function _lastPos(_0x7F30,_0x7ECD){if(_0x7ECD> 0){return this[_$_94bd[18]][_0x7F30][_0x7ECD- 1]+ this[_$_94bd[9]][_0x7F30][_0x7ECD- 1][_$_94bd[29]]}else {return 0}}function printForHtml(_0x6358){return _0x6358}function _isWordChar(_0x7E6A){if(_0x7E6A[_$_94bd[53]](this[_$_94bd[6]])==  -1){return false}else {return true}}function _getWordObject(_0x7A29,_0x7A8C){if(this[_$_94bd[0]][_0x7A29]){if(this[_$_94bd[0]][_0x7A29][_$_94bd[54]][_0x7A8C]){return this[_$_94bd[0]][_0x7A29][_$_94bd[54]][_0x7A8C]}};return null}function _wordInputStr(_0x811F){var _0x5C62=_$_94bd[55];_0x5C62+= _$_94bd[56]+ _0x811F+ _$_94bd[57]+ _0x811F[_$_94bd[29]]+ _$_94bd[42];return _0x5C62}function _adjustIndexes(_0x7A29,_0x7A8C,_0x79C6){for(var i=_0x7A8C+ 1;i< this[_$_94bd[9]][_0x7A29][_$_94bd[29]];i++){this[_$_94bd[18]][_0x7A29][i]= this[_$_94bd[18]][_0x7A29][i]+ _0x79C6}}