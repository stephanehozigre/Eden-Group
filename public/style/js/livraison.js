$(document).ready(function(){
	var timer = setInterval(dernier , 3000);
    $("#form1").unbind('submit').bind('submit',function(){
      var form =$(this);
      var formData = new FormData($(this)[0]);
      $.ajax({
        url:form.attr('action'),
        type:form.attr('method'),
        data:formData,
        dataType:'text',
        cache:false,
        contentType:false,
        processData:false,
        async:false,
        success:function(reponse){
            $('#message').val('');       
        }
      });
      return false;
    });
    //Affiche le dernier message de la discussion
    function dernier()
      {
        $.ajax({
            url:'dashboard-users/storeLastMessage',
            dataType:'json',
            type:'get',
            data:{lastid:lastid},
            success:function(data)
            {
              if (data.auteur!=data.pers) 
              {
                texte = '<li class="sent">'+
                                '<p>'+data.message+'</p>'+
                                '@if($discussion->lu==0)'+
                                '<br><span style="float: left;margin-left:-45px;">En cours...</span>'+
                                '@else'+
                                '<br><span style="float: left;margin-left:-45px;">Vu</span>'+
                                '@endif'+
                        '</li>';
               $('#messages').append(texte);
              }
              else
              {
                texte = '<li class="sent">'+
                                '<p>'+data.message+'</p>'+
                                '@if($discussion->lu==0)'+
                                '<br><span style="float: left;margin-left:-45px;">En cours...</span>'+
                                '@else'+
                                '<br><span style="float: left;margin-left:-45px;">Vu</span>'+
                                '@endif'+
                        '</li>';
                $('#messages').append(texte);
              }
              /*var classes = $("#scrol").attr("class");
              	if (classes == 'col-lg-8') 
	            {
	              $("#scrol").animate({scrollTop : $("#scrol")[0].scrollHeight},10);
	            }*/
              lastid = data.lastid;
            }
          })
      }
})