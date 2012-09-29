function readFromCookie(name){
	var regExp = new RegExp(name+"=([^;]+)");
    var matches = regExp.exec(document.cookie);
    return matches ? matches[1] : null;
}

function add_atividade(id_atividade){
	list_atividades=readFromCookie("atividades");
	var date = new Date();
	date.setTime(date.getTime() + (5 * 24 * 60 * 60 * 1000));
	if(list_atividades==null){
		
		document.cookie="atividades="+id_atividade+";expires="+date.toGMTString()+";";
	}else{
		document.cookie="atividades="+list_atividades+"_"+id_atividade+";expires="+date.toGMTString()+";";
	}
}

function delete_atividade(id_atividade){

	list_atividades=readFromCookie("atividades");
	
	var date = new Date();
	date.setTime(date.getTime() + (5 * 24 * 60 * 60 * 1000));
	if(list_atividades!=null){
		var temp = new Array();
		
		temp = list_atividades.split('_');
		list_atividades="";
		
		for(var i=0;i<temp.length;i++){
			if(temp[i]!=id_atividade){
				list_atividades+=temp[i];
				if(i<temp.length-1){
					list_atividades+="_";
				}
			}
		}
		document.cookie="atividades="+list_atividades+";expires="+date.toGMTString()+";";
	}
	
}

function checkClicked(status,id_atividade){
	if(status==true){
		
		add_atividade(id_atividade);
	}else{
		
		delete_atividade(id_atividade);
	}
	
}

