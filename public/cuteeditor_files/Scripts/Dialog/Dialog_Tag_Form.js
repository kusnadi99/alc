var _$_4e3c=["inp_action","sel_Method","inp_name","inp_id","inp_encode","sel_target","Name","value","name","id","action","method","encoding","application/x-www-form-urlencoded","","target","removeAttribute"];var inp_action=Window_GetElement(window,_$_4e3c[0],true);var sel_Method=Window_GetElement(window,_$_4e3c[1],true);var inp_name=Window_GetElement(window,_$_4e3c[2],true);var inp_id=Window_GetElement(window,_$_4e3c[3],true);var inp_encode=Window_GetElement(window,_$_4e3c[4],true);var sel_target=Window_GetElement(window,_$_4e3c[5],true);UpdateState= function UpdateState_Form(){};SyncToView= function SyncToView_Form(){if(element[_$_4e3c[6]]){inp_name[_$_4e3c[7]]= element[_$_4e3c[6]]};if(element[_$_4e3c[8]]){inp_name[_$_4e3c[7]]= element[_$_4e3c[8]]};inp_id[_$_4e3c[7]]= element[_$_4e3c[9]];if(element[_$_4e3c[10]]){inp_action[_$_4e3c[7]]= element[_$_4e3c[10]]};if(element[_$_4e3c[11]]){sel_Method[_$_4e3c[7]]= element[_$_4e3c[11]]};if(element[_$_4e3c[12]]== _$_4e3c[13]){inp_encode[_$_4e3c[7]]= _$_4e3c[14]}else {inp_encode[_$_4e3c[7]]= element[_$_4e3c[12]]};if(element[_$_4e3c[15]]){sel_target[_$_4e3c[7]]= element[_$_4e3c[15]]}};SyncTo= function SyncTo_Form(element){element[_$_4e3c[8]]= inp_name[_$_4e3c[7]];if(element[_$_4e3c[6]]){element[_$_4e3c[6]]= inp_name[_$_4e3c[7]]}else {if(element[_$_4e3c[8]]){element[_$_4e3c[16]](_$_4e3c[8],0);element[_$_4e3c[6]]= inp_name[_$_4e3c[7]]}else {element[_$_4e3c[6]]= inp_name[_$_4e3c[7]]}};element[_$_4e3c[9]]= inp_id[_$_4e3c[7]];element[_$_4e3c[10]]= inp_action[_$_4e3c[7]];element[_$_4e3c[11]]= sel_Method[_$_4e3c[7]];try{element[_$_4e3c[12]]= inp_encode[_$_4e3c[7]]}catch(e){};element[_$_4e3c[15]]= sel_target[_$_4e3c[7]];if(element[_$_4e3c[15]]== _$_4e3c[14]){element[_$_4e3c[16]](_$_4e3c[15])};if(element[_$_4e3c[6]]== _$_4e3c[14]){element[_$_4e3c[16]](_$_4e3c[6])};if(element[_$_4e3c[10]]== _$_4e3c[14]){element[_$_4e3c[16]](_$_4e3c[10])}}