var _$_1abe=["popUpUrl","spellerpages/spellchecker.html","popUpName","spellchecker","popUpProps","replWordFlag","R","ignrWordFlag","I","replAllFlag","RA","ignrAllFlag","IA","fromReplAll","~RA","fromIgnrAll","~IA","wordFlags","currentTextIndex","currentWordIndex","spellCheckerWin","controlWin","wordWin","textArea","textInputs","_spellcheck","_getSuggestions","_setAsIgnored","_getTotalReplaced","_setWordText","_getFormInputs","openChecker","startCheck","checkTextBoxes","checkTextAreas","spellCheckAll","ignoreWord","ignoreAll","replaceWord","replaceAll","terminateSpell","undo","speller","^text$","^textarea$","^text(area)?$","open","resetForm","length","Error: Word frame not available.","getTextVal","Error: \"Not in dictionary\" text is missing.","Error: \"Not in dictionary\" text is missing","totalWords","replacementText","value","","totalMisspellings","No words changed.","No misspellings found.","One word changed."," words changed.","OnFinished","function","totalPreviousWords","removeFocus","originalSpellings","disableUndo","enableUndo","evaluatedText","setFocus","clearSuggestions","suggestions","addSuggestion","selectDefaultSuggestion","setText","forms","elements","match","type"];function spellChecker(_0x38FD7){this[_$_1abe[0]]= _$_1abe[1];this[_$_1abe[2]]= _$_1abe[3];this[_$_1abe[4]]= null;this[_$_1abe[5]]= _$_1abe[6];this[_$_1abe[7]]= _$_1abe[8];this[_$_1abe[9]]= _$_1abe[10];this[_$_1abe[11]]= _$_1abe[12];this[_$_1abe[13]]= _$_1abe[14];this[_$_1abe[15]]= _$_1abe[16];this[_$_1abe[17]]=  new Array();this[_$_1abe[18]]= 0;this[_$_1abe[19]]= 0;this[_$_1abe[20]]= null;this[_$_1abe[21]]= null;this[_$_1abe[22]]= null;this[_$_1abe[23]]= _0x38FD7;this[_$_1abe[24]]= arguments;this[_$_1abe[25]]= _spellcheck;this[_$_1abe[26]]= _getSuggestions;this[_$_1abe[27]]= _setAsIgnored;this[_$_1abe[28]]= _getTotalReplaced;this[_$_1abe[29]]= _setWordText;this[_$_1abe[30]]= _getFormInputs;this[_$_1abe[31]]= openChecker;this[_$_1abe[32]]= startCheck;this[_$_1abe[33]]= checkTextBoxes;this[_$_1abe[34]]= checkTextAreas;this[_$_1abe[35]]= spellCheckAll;this[_$_1abe[36]]= ignoreWord;this[_$_1abe[37]]= ignoreAll;this[_$_1abe[38]]= replaceWord;this[_$_1abe[39]]= replaceAll;this[_$_1abe[40]]= terminateSpell;this[_$_1abe[41]]= undo;window[_$_1abe[42]]= this}function checkTextBoxes(){this[_$_1abe[24]]= this[_$_1abe[30]](_$_1abe[43]);this[_$_1abe[31]]()}function checkTextAreas(){this[_$_1abe[24]]= this[_$_1abe[30]](_$_1abe[44]);this[_$_1abe[31]]()}function spellCheckAll(){this[_$_1abe[24]]= this[_$_1abe[30]](_$_1abe[45]);this[_$_1abe[31]]()}function openChecker(){this[_$_1abe[20]]= window[_$_1abe[46]](this[_$_1abe[0]],this[_$_1abe[2]],this[_$_1abe[4]]);this[_$_1abe[20]][_$_1abe[42]]= this}function startCheck(_0x3909D,_0x3903A){this[_$_1abe[22]]= _0x3909D;this[_$_1abe[21]]= _0x3903A;this[_$_1abe[22]][_$_1abe[47]]();this[_$_1abe[21]][_$_1abe[47]]();this[_$_1abe[18]]= 0;this[_$_1abe[19]]= 0;this[_$_1abe[17]]=  new Array(this[_$_1abe[22]][_$_1abe[24]][_$_1abe[48]]);for(var i=0;i< this[_$_1abe[17]][_$_1abe[48]];i++){this[_$_1abe[17]][i]= []};this[_$_1abe[25]]();return true}function ignoreWord(){var _0x377DD=this[_$_1abe[19]];var _0x3777A=this[_$_1abe[18]];if(!this[_$_1abe[22]]){alert(_$_1abe[49]);return false};if(!this[_$_1abe[22]][_$_1abe[50]](_0x3777A,_0x377DD)){alert(_$_1abe[51]);return false};if(this[_$_1abe[27]](_0x3777A,_0x377DD,this[_$_1abe[7]])){this[_$_1abe[19]]++;this[_$_1abe[25]]()};return true}function ignoreAll(){var _0x377DD=this[_$_1abe[19]];var _0x3777A=this[_$_1abe[18]];if(!this[_$_1abe[22]]){alert(_$_1abe[49]);return false};var _0x37717=this[_$_1abe[22]][_$_1abe[50]](_0x3777A,_0x377DD);if(!_0x37717){alert(_$_1abe[52]);return false};this[_$_1abe[27]](_0x3777A,_0x377DD,this[_$_1abe[11]]);for(var i=_0x3777A;i< this[_$_1abe[22]][_$_1abe[24]][_$_1abe[48]];i++){for(var _0x7C18=0;_0x7C18< this[_$_1abe[22]][_$_1abe[53]](i);_0x7C18++){if((i== _0x3777A&& _0x7C18> _0x377DD)|| i> _0x3777A){if((this[_$_1abe[22]][_$_1abe[50]](i,_0x7C18)== _0x37717)&& (!this[_$_1abe[17]][i][_0x7C18])){this[_$_1abe[27]](i,_0x7C18,this[_$_1abe[15]])}}}};this[_$_1abe[19]]++;this[_$_1abe[25]]();return true}function replaceWord(){var _0x377DD=this[_$_1abe[19]];var _0x3777A=this[_$_1abe[18]];if(!this[_$_1abe[22]]){alert(_$_1abe[49]);return false};if(!this[_$_1abe[22]][_$_1abe[50]](_0x3777A,_0x377DD)){alert(_$_1abe[52]);return false};if(!this[_$_1abe[21]][_$_1abe[54]]){return false};var _0x8B2D=this[_$_1abe[21]][_$_1abe[54]];if(_0x8B2D[_$_1abe[55]]){var _0x385C9= new String(_0x8B2D[_$_1abe[55]]);if(this[_$_1abe[29]](_0x3777A,_0x377DD,_0x385C9,this[_$_1abe[5]])){this[_$_1abe[19]]++;this[_$_1abe[25]]()}};return true}function replaceAll(){var _0x3777A=this[_$_1abe[18]];var _0x377DD=this[_$_1abe[19]];if(!this[_$_1abe[22]]){alert(_$_1abe[49]);return false};var _0x37717=this[_$_1abe[22]][_$_1abe[50]](_0x3777A,_0x377DD);if(!_0x37717){alert(_$_1abe[52]);return false};var _0x8B2D=this[_$_1abe[21]][_$_1abe[54]];if(!_0x8B2D[_$_1abe[55]]){return false};var _0x385C9= new String(_0x8B2D[_$_1abe[55]]);this[_$_1abe[29]](_0x3777A,_0x377DD,_0x385C9,this[_$_1abe[9]]);for(var i=_0x3777A;i< this[_$_1abe[22]][_$_1abe[24]][_$_1abe[48]];i++){for(var _0x7C18=0;_0x7C18< this[_$_1abe[22]][_$_1abe[53]](i);_0x7C18++){if((i== _0x3777A&& _0x7C18> _0x377DD)|| i> _0x3777A){if((this[_$_1abe[22]][_$_1abe[50]](i,_0x7C18)== _0x37717)&& (!this[_$_1abe[17]][i][_0x7C18])){this[_$_1abe[29]](i,_0x7C18,_0x385C9,this[_$_1abe[13]])}}}};this[_$_1abe[19]]++;this[_$_1abe[25]]();return true}function terminateSpell(){var msg=_$_1abe[56];var _0x3A8FA=this[_$_1abe[28]]();if(_0x3A8FA== 0){if(!this[_$_1abe[22]]){msg= _$_1abe[56]}else {if(this[_$_1abe[22]][_$_1abe[57]]()){msg+= _$_1abe[58]}else {msg+= _$_1abe[59]}}}else {if(_0x3A8FA== 1){msg+= _$_1abe[60]}else {msg+= _0x3A8FA+ _$_1abe[61]}};if(msg){alert(msg)};if(_0x3A8FA> 0){for(var i=0;i< this[_$_1abe[24]][_$_1abe[48]];i++){if(this[_$_1abe[22]]){if(this[_$_1abe[22]][_$_1abe[24]][i]){this[_$_1abe[24]][i][_$_1abe[55]]= this[_$_1abe[22]][_$_1abe[24]][i]}}}};if( typeof (this[_$_1abe[62]])== _$_1abe[63]){this[_$_1abe[62]](_0x3A8FA)};return true}function undo(){var _0x3777A=this[_$_1abe[18]];var _0x377DD=this[_$_1abe[19]];if(this[_$_1abe[22]][_$_1abe[64]](_0x3777A,_0x377DD)> 0){this[_$_1abe[22]][_$_1abe[65]](_0x3777A,_0x377DD);do{if(this[_$_1abe[19]]== 0&& this[_$_1abe[18]]> 0){this[_$_1abe[18]]--;this[_$_1abe[19]]= this[_$_1abe[22]][_$_1abe[53]](this[_$_1abe[18]])- 1;if(this[_$_1abe[19]]< 0){this[_$_1abe[19]]= 0}}else {if(this[_$_1abe[19]]> 0){this[_$_1abe[19]]--}}}while(this[_$_1abe[22]][_$_1abe[53]](this[_$_1abe[18]])== 0|| this[_$_1abe[17]][this[_$_1abe[18]]][this[_$_1abe[19]]]== this[_$_1abe[15]]|| this[_$_1abe[17]][this[_$_1abe[18]]][this[_$_1abe[19]]]== this[_$_1abe[13]]);;var _0x3AD3B=this[_$_1abe[18]];var _0x7ECD=this[_$_1abe[19]];var _0x3ACD8=this[_$_1abe[22]][_$_1abe[66]][_0x3AD3B][_0x7ECD];if(this[_$_1abe[22]][_$_1abe[64]](_0x3AD3B,_0x7ECD)== 0){this[_$_1abe[21]][_$_1abe[67]]()};var i,_0x7C18,_0x3AC75;switch(this[_$_1abe[17]][_0x3AD3B][_0x7ECD]){case this[_$_1abe[9]]:for(i= _0x3AD3B;i< this[_$_1abe[22]][_$_1abe[24]][_$_1abe[48]];i++){for(_0x7C18= 0;_0x7C18< this[_$_1abe[22]][_$_1abe[53]](i);_0x7C18++){if((i== _0x3AD3B&& _0x7C18>= _0x7ECD)|| i> _0x3AD3B){_0x3AC75= this[_$_1abe[22]][_$_1abe[66]][i][_0x7C18];if(_0x3AC75== _0x3ACD8){this[_$_1abe[29]](i,_0x7C18,_0x3AC75,undefined)}}}};break;case this[_$_1abe[11]]:for(i= _0x3AD3B;i< this[_$_1abe[22]][_$_1abe[24]][_$_1abe[48]];i++){for(_0x7C18= 0;_0x7C18< this[_$_1abe[22]][_$_1abe[53]](i);_0x7C18++){if((i== _0x3AD3B&& _0x7C18>= _0x7ECD)|| i> _0x3AD3B){_0x3AC75= this[_$_1abe[22]][_$_1abe[66]][i][_0x7C18];if(_0x3AC75== _0x3ACD8){this[_$_1abe[17]][i][_0x7C18]= undefined}}}};break;case this[_$_1abe[5]]:this[_$_1abe[29]](_0x3AD3B,_0x7ECD,_0x3ACD8,undefined);break};this[_$_1abe[17]][_0x3AD3B][_0x7ECD]= undefined;this[_$_1abe[25]]()}}function _spellcheck(){var _0x80BC=this[_$_1abe[22]];if(this[_$_1abe[19]]== _0x80BC[_$_1abe[53]](this[_$_1abe[18]])){this[_$_1abe[18]]++;this[_$_1abe[19]]= 0;if(this[_$_1abe[18]]< this[_$_1abe[22]][_$_1abe[24]][_$_1abe[48]]){this[_$_1abe[25]]();return}else {this[_$_1abe[40]]();return}};if(this[_$_1abe[19]]> 0){this[_$_1abe[21]][_$_1abe[68]]()};if(this[_$_1abe[17]][this[_$_1abe[18]]][this[_$_1abe[19]]]){this[_$_1abe[19]]++;this[_$_1abe[25]]()}else {var _0x8059=_0x80BC[_$_1abe[50]](this[_$_1abe[18]],this[_$_1abe[19]]);if(_0x8059){this[_$_1abe[21]][_$_1abe[69]][_$_1abe[55]]= _0x8059;_0x80BC[_$_1abe[70]](this[_$_1abe[18]],this[_$_1abe[19]]);this[_$_1abe[26]](this[_$_1abe[18]],this[_$_1abe[19]])}}}function _getSuggestions(_0x7D41,_0x7DA4){this[_$_1abe[21]][_$_1abe[71]]();var _0x7C7B=this[_$_1abe[22]][_$_1abe[72]][_0x7D41][_0x7DA4];if(_0x7C7B){for(var _0x7CDE=0;_0x7CDE< _0x7C7B[_$_1abe[48]];_0x7CDE++){this[_$_1abe[21]][_$_1abe[73]](_0x7C7B[_0x7CDE])}};this[_$_1abe[21]][_$_1abe[74]]()}function _setAsIgnored(_0x7D41,_0x7DA4,_0x7F93){this[_$_1abe[22]][_$_1abe[65]](_0x7D41,_0x7DA4);this[_$_1abe[17]][_0x7D41][_0x7DA4]= _0x7F93;return true}function _getTotalReplaced(){var _0x7E07=0;for(var i=0;i< this[_$_1abe[17]][_$_1abe[48]];i++){for(var _0x7C18=0;_0x7C18< this[_$_1abe[17]][i][_$_1abe[48]];_0x7C18++){if((this[_$_1abe[17]][i][_0x7C18]== this[_$_1abe[5]])|| (this[_$_1abe[17]][i][_0x7C18]== this[_$_1abe[9]])|| (this[_$_1abe[17]][i][_0x7C18]== this[_$_1abe[13]])){_0x7E07++}}};return _0x7E07}function _setWordText(_0x7D41,_0x7DA4,_0x7FF6,_0x7F93){this[_$_1abe[22]][_$_1abe[75]](_0x7D41,_0x7DA4,_0x7FF6);this[_$_1abe[17]][_0x7D41][_0x7DA4]= _0x7F93;return true}function _getFormInputs(_0x7B52){var _0x7BB5= new Array();for(var i=0;i< document[_$_1abe[76]][_$_1abe[48]];i++){for(var _0x7C18=0;_0x7C18< document[_$_1abe[76]][i][_$_1abe[77]][_$_1abe[48]];_0x7C18++){if(document[_$_1abe[76]][i][_$_1abe[77]][_0x7C18][_$_1abe[79]][_$_1abe[78]](_0x7B52)){_0x7BB5[_0x7BB5[_$_1abe[48]]]= document[_$_1abe[76]][i][_$_1abe[77]][_0x7C18]}}};return _0x7BB5}