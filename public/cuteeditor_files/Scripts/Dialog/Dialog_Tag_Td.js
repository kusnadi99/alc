var _$_eb80=["inp_width","inp_height","sel_align","sel_valign","inp_bgColor","inp_borderColor","inp_borderColorLight","inp_borderColorDark","inp_class","inp_id","inp_tooltip","sel_noWrap","sel_CellScope","value","bgColor","getAttribute","backgroundColor","style","","id","borderColor","borderColorLight","borderColorDark","className","width","height","align","vAlign","title","noWrap","scope","removeAttribute","ValidNumber","test","ValidID","class","valign","cssText","border-image: none;","onclick"];var inp_width=Window_GetElement(window,_$_eb80[0],true);var inp_height=Window_GetElement(window,_$_eb80[1],true);var sel_align=Window_GetElement(window,_$_eb80[2],true);var sel_valign=Window_GetElement(window,_$_eb80[3],true);var inp_bgColor=Window_GetElement(window,_$_eb80[4],true);var inp_borderColor=Window_GetElement(window,_$_eb80[5],true);var inp_borderColorLight=Window_GetElement(window,_$_eb80[6],true);var inp_borderColorDark=Window_GetElement(window,_$_eb80[7],true);var inp_class=Window_GetElement(window,_$_eb80[8],true);var inp_id=Window_GetElement(window,_$_eb80[9],true);var inp_tooltip=Window_GetElement(window,_$_eb80[10],true);var sel_noWrap=Window_GetElement(window,_$_eb80[11],true);var sel_CellScope=Window_GetElement(window,_$_eb80[12],true);SyncToView= function SyncToView_Td(){inp_bgColor[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[14])|| element[_$_eb80[17]][_$_eb80[16]]|| _$_eb80[18];inp_id[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[19])|| _$_eb80[18];inp_bgColor[_$_eb80[17]][_$_eb80[16]]= inp_bgColor[_$_eb80[13]];inp_borderColor[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[20])|| _$_eb80[18];inp_borderColor[_$_eb80[17]][_$_eb80[16]]= inp_borderColor[_$_eb80[13]];inp_borderColorLight[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[21])|| _$_eb80[18];inp_borderColorLight[_$_eb80[17]][_$_eb80[16]]= inp_borderColorLight[_$_eb80[13]];inp_borderColorDark[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[22])|| _$_eb80[18];inp_borderColorDark[_$_eb80[17]][_$_eb80[16]]= inp_borderColorDark[_$_eb80[13]];inp_class[_$_eb80[13]]= element[_$_eb80[23]];inp_width[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[24])|| element[_$_eb80[17]][_$_eb80[24]]|| _$_eb80[18];inp_height[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[25])|| element[_$_eb80[17]][_$_eb80[25]]|| _$_eb80[18];sel_align[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[26])|| _$_eb80[18];sel_valign[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[27])|| _$_eb80[18];inp_tooltip[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[28])|| _$_eb80[18];sel_noWrap[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[29])|| _$_eb80[18];sel_CellScope[_$_eb80[13]]= element[_$_eb80[15]](_$_eb80[30])|| _$_eb80[18]};SyncTo= function SyncTo_Td(element){if(inp_bgColor[_$_eb80[13]]){if(element[_$_eb80[17]][_$_eb80[16]]){element[_$_eb80[17]][_$_eb80[16]]= inp_bgColor[_$_eb80[13]]}else {element[_$_eb80[14]]= inp_bgColor[_$_eb80[13]]}}else {element[_$_eb80[31]](_$_eb80[14])};element[_$_eb80[20]]= inp_borderColor[_$_eb80[13]];element[_$_eb80[21]]= inp_borderColorLight[_$_eb80[13]];element[_$_eb80[22]]= inp_borderColorDark[_$_eb80[13]];element[_$_eb80[23]]= inp_class[_$_eb80[13]];if(element[_$_eb80[17]][_$_eb80[24]]|| element[_$_eb80[17]][_$_eb80[25]]){try{element[_$_eb80[17]][_$_eb80[24]]= inp_width[_$_eb80[13]];element[_$_eb80[17]][_$_eb80[25]]= inp_height[_$_eb80[13]]}catch(er){alert(CE_GetStr(_$_eb80[32]))}}else {try{element[_$_eb80[24]]= inp_width[_$_eb80[13]];element[_$_eb80[25]]= inp_height[_$_eb80[13]]}catch(er){alert(CE_GetStr(_$_eb80[32]))}};var _0x349D8=/[^a-z\d]/i;if(_0x349D8[_$_eb80[33]](inp_id[_$_eb80[13]])){alert(CE_GetStr(_$_eb80[34]));return};element[_$_eb80[26]]= sel_align[_$_eb80[13]];element[_$_eb80[19]]= inp_id[_$_eb80[13]];element[_$_eb80[27]]= sel_valign[_$_eb80[13]];element[_$_eb80[29]]= sel_noWrap[_$_eb80[13]];element[_$_eb80[28]]= inp_tooltip[_$_eb80[13]];element[_$_eb80[30]]= sel_CellScope[_$_eb80[13]];if(element[_$_eb80[19]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[19])};if(element[_$_eb80[30]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[30])};if(element[_$_eb80[29]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[29])};if(element[_$_eb80[14]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[14])};if(element[_$_eb80[20]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[20])};if(element[_$_eb80[21]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[21])};if(element[_$_eb80[22]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[22])};if(element[_$_eb80[23]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[23])};if(element[_$_eb80[23]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[35])};if(element[_$_eb80[26]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[26])};if(element[_$_eb80[27]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[36])};if(element[_$_eb80[28]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[28])};if(element[_$_eb80[24]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[24])};if(element[_$_eb80[25]]== _$_eb80[18]){element[_$_eb80[31]](_$_eb80[25])};if(element[_$_eb80[17]][_$_eb80[37]]== _$_eb80[38]){element[_$_eb80[31]](_$_eb80[17])}};inp_borderColor[_$_eb80[39]]= function inp_borderColor_onclick(){SelectColor(inp_borderColor)};inp_bgColor[_$_eb80[39]]= function inp_bgColor_onclick(){SelectColor(inp_bgColor)};inp_borderColorLight[_$_eb80[39]]= function inp_borderColorLight_onclick(){SelectColor(inp_borderColorLight)};inp_borderColorDark[_$_eb80[39]]= function inp_borderColorDark_onclick(){SelectColor(inp_borderColorDark)}