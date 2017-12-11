window.onload = function () {
	
    var aReply = document.getElementsByClassName('reply');
    var aWtail = document.getElementsByClassName('add-com');

    for(var i = 0; i < aReply.length; i++){
        aReply[i].index = i;
        aReply[i].onclick = function () {
            var div = document.createElement('div');
            div.className = 'reply-input';
			input = document.createElement('input');
			var a = document.createElement('input');
			a.type = "submit";
			a.value = '立即评论';
            a.className = 'reply';
			
			aWtail[this.index].appendChild(div);
            div.appendChild(input);
			div.appendChild(a);
			re = document.getElementsByClassName("recon")[this.index];
			a.onclick = function () {
				re.value = input.value;
			};
		}

	}
	
	
}