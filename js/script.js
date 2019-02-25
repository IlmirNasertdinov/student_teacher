$( document ).ready(function() {
    $('#addperson').on('click', function(e){
        e.preventDefault();
        var status = $( "#inputState" ).val();
        var name = $.trim($( "#name" ).val());
        var surname = $.trim($( "#surname" ).val());
        var patronymic = $.trim($( "#patronymic" ).val());
        if((status==='1'||status==='2')&&(name.length!==0)&&(surname.length!==0)&&(patronymic.length!==0)) {
            $.ajax({
                type:"POST",
                url:'helpers/addperson.php',
                data:{'status':status, 'name':name,'surname':surname, 'patronymic': patronymic },
                cache:false,
                success:function(info){
                    if(!document.getElementById('addsuccess')){
						$("#new").append('<p id="addsuccess">'+info+'</p>');
					}
					else{
						$('#addsuccess').replaceWith('<p id="addsuccess">'+info+'</p>');
					}
                },
                error:function(){
                    alert('По техническим причинам на сайте не удалось добавить человека');
                }
            });
        }  else {
            alert('no');
        }  
    });
    $('#student-tab').on('click', function(e){
        e.preventDefault();
        $.ajax({
            type:"GET",
            url:'helpers/showstudents.php',
            cache:false,
            success:function(info){
                $('#student_list').html(info);
            },
            error:function(){
                alert('По техническим причинам на сайте не удалось показать список студентов');
            }
        });
    });
    
    $('#teacher-tab').on('click', function(e){
        e.preventDefault();
        $.ajax({
            type:"GET",
            url:'helpers/showteachers.php',
            cache:false,
            success:function(info){
                $('#teacher_list').html(info);
            },
            error:function(){
                alert('По техническим причинам на сайте не удалось показать список студентов');
            }
        });
    });
});