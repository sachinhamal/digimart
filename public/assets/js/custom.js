 $(document).ready(function(){

    

                    $("#show").click(function(){

                        $("#hide-show").show();

                    });

                    $("#show").click(function(){

                        $("#hide-shows").show();

                        $("#hide-showss").hide();

                    });

                    $("#hide").click(function(){

                        $("#hide-show").hide();

                    });$("#hide").click(function(){

                        $("#hide-shows").hide();

                        $("#hide-showss").show();

                    });

                });

            $(document).ready(function(){

    

                    $("#show1").click(function(){

                        $("#hide-show1").show();

                    });

                    $("#hide1").click(function(){

                        $("#hide-show1").hide();

                    });

                });



            $(document).ready(function(){

    

                    $("#show2-1").click(function(){

                        $("#hide-show2-1").show();

                    });

                    $("#show2-1").click(function(){

                        $("#hide-show2-2").hide();

                    });

                    $("#show2-1").click(function(){

                        $("#hide-show2-3").hide();

                    }); 





                    $("#show2-2").click(function(){

                        $("#hide-show2-2").show();

                    });

                    $("#show2-2").click(function(){

                        $("#hide-show2-1").hide();

                    });

                    $("#show2-2").click(function(){

                        $("#hide-show2-3").hide();

                    });







                    $("#show2-3").click(function(){

                        $("#hide-show2-3").show();

                    });

                    $("#show2-3").click(function(){

                        $("#hide-show2-1").hide();

                    });

                    $("#show2-3").click(function(){

                        $("#hide-show2-2").hide();

                    }); 







                });



            $(document).ready(function(){

    

                    $("#show3-1").click(function(){

                        $("#hide-show3-1").show();

                    });

                    $("#show3-1").click(function(){

                        $("#hide-show3-2").hide();

                    });





                    $("#show3-2").click(function(){

                        $("#hide-show3-2").show();

                    });

                    $("#show3-2").click(function(){

                        $("#hide-show3-1").hide();

                    });   

                });

            $(document).ready(function(){

                 $('#sltcou').click(function(){

                      $('#courses').show();

                 });

            });



             //  date picker for student 

                $(document).ready(function(){

                    var date_input=$('input[name="date"]'); //our date input has the name "date"

                    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";

                    date_input.datepicker({

                        format: 'mm/dd/yyyy',

                        container: container,

                        todayHighlight: true,

                        autoclose: true,

                    })

                })

// 

                

                



                var ct = 1;

                    function new_link()

                    {

                        ct++;

                        var div1 = document.createElement('div'); 

                         

                        div1.innerHTML = document.getElementById('newlinktpl').innerHTML;

                        document.getElementById('newlink').appendChild(div1);

                    }



            // 2nd js code for dynamic text box



                var ad = 1;

                function add_answer()

                {

                    ad++;

                    var div1 = document.createElement('div'); 

                    div1.id = ad;





                    var delLink = '<div class="new-input"><a href="javascript:delIt('+ ad +')"><i class="fa fa-times fa-1x" title="Delete dates Box"></i></a></div>';

                    div1.innerHTML = document.getElementById('add-ans-new').innerHTML + delLink;

                    document.getElementById('add-ans').appendChild(div1);

                }





                function delIt(eleId)

                {

                    d = document;

                    var ele = d.getElementById(eleId);

                    var parentEle = d.getElementById('add-ans');

                    parentEle.removeChild(ele);

                } 



            // 3rd function to add/delete the newly added set of elements



                var add = 1;

                function add_answerr()

                {

                    add++;

                    var div2 = document.createElement('div'); 

                    div2.id = add;





                    var deltLink = '<div class="new-input1"><a href="javascript:deltIt('+ add +')"><i class="fa fa-times fa-1x" title="Delete Answer Box"></i></a></div>';

                    div2.innerHTML = document.getElementById('add-ans-neww').innerHTML + deltLink;

                    document.getElementById('add-anss').appendChild(div2);

                }



                

                function deltIt(elemId)

                {

                    dd = document;

                    var elem = dd.getElementById(elemId);

                    var parentElem = dd.getElementById('add-anss');

                    parentElem.removeChild(elem);

                } 



            // 4rth function to add the newly added set of elements





                var addd = 1;

                    function add_answerrr()

                    {

                        addd++;

                        var div3 = document.createElement('div'); 

                        div3.id = addd;





                        var delttLink = '<div class="new-input2"><a href="javascript:delttIt('+ addd +')"><i class="fa fa-times fa-1x" title="Delete Choices Box"></i></a></div>';

                        div3.innerHTML = document.getElementById('add-ans-newww').innerHTML + document.getElementById('add-ans-new1').innerHTML + delttLink;

                        document.getElementById('add-ansss').appendChild(div3);

                    }



                    function delttIt(elemmId)

                    {

                        ddd = document;

                        var elemm = ddd.getElementById(elemmId);

                        var parentElemm = ddd.getElementById('add-ansss');

                        parentElemm.removeChild(elemm);

                    } 

            



            // 5th for datatables js



               $(document).ready(function() 

               {

                    $('#example').DataTable();

                } ); 

               

               $(function() {

                    $("#example1").dataTable(); 

                });







            // 6th for ck editors js 



                $(function() 

                { 

                CKEDITOR.replace('editor1'); 

                });

 

 





            // 7th for show and hide published icons js



                $('#category-tabs a').click(function()

                { 

                    $(this).find('i').toggleClass('fa-check-square fa-times-circle')

                });





                // adding dynamic select option box in admin dashboard js code











//   code start for 2nd phase



























// 5th for show and hide published icons js













            $('#category-tabs a').click(function()

            { 

                $(this).find('i').toggleClass('fa-check-square fa-times-circle')

            });

            //

            

//check box 

            function checkVal(val){

               // alert(val);

              if ($(val).is(':checked')) {

                $(val).val("1");

                

               }

               else{

                $(val).val("0");

             

               }

                

                

            }



    

    //show only intended units  here

    function toggel(id){

                 // alert(id);

        var intend ='gopal-';

        // alert(title);

        // var target = $(this).attr('name');

        // alert(target);

        $("#"+intend+id).show().siblings("div.content-unit-desc").hide();



    }

    //show only intended sub-units here

    function toggel_sub(id){

        // alert(id);

        var intended='gopal-';

        //alert(intended);

        $("#"+intended+id).show().siblings("div.content-unit-desc").hide();

    }





// ajax to post form 



                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });

                   $('#user-inst').on('submit',function(e){

                      // alert()

                     e.preventDefault();

                       // $('.loader').removeClass('hidden');

                      var data=$(this).serialize();

                      var url=$(this).attr('action');

                      var post=$(this).attr('method');

                      var name= $('input[name=name]').val();  

                      var email= $('input[name=email]').val();



                      // if(!name){



                      //   document.getElementById("usernameError").innerHTML = "You must enter a username";

                      //   return false;

                      // }

                      // if(!email){

                      //   // alert('name cannot be null');

                      //   document.getElementById("emailError").innerHTML = "You must enter a email address";

                      //   return false;

                      // }

                     // alert(data);

                        $.ajax({

                          type:post,

                          url:url,

                          data:data,

                          dataTy:'json',

                          //success

                          success:function(data){

                            // alert(data);

                            $('#loader').addClass("hide-loader");

                            if((data.errors)){

                               if((data.errors.email)){

                                   $('.errorEmail').removeClass('hidden');

                                   $('.errorEmail').text(data.errors.email);

                                  }

                                  if((data.errors.password)){

                                    $('.errorPassword').removeClass('hidden');

                                    $('.errorPassword').text(data.errors.password);

                                  }

                                  if((data.errors.name)){

                                    $('.errorName').removeClass('hidden');

                                    $('.errorName').text(data.errors.name)

                                  }



                            }

                            else{
                             $('#addModal').modal('hide');
                             if (data.role == 'student') {
                             $('#example').append("<tr><td>"+data.name+"</td><td>"+data.email+"</td><td>"+data.email+"</td><td>"
                              +data.phone_no+"</td><td>"+data.created_at+"</td><td>"+data.updated_at+"</td><td><button class='btn btn-primary btn-sm'> <i class='fa fa-plus fa-fw'></i> View</button><button class='btn btn-primary btn-sm' > <i class='fa fa-plus fa-fw'></i> Edit</button>  </td>    ");
                             }else{
                               $('#example1').append("<tr><td>"+data.name+"</td><td>"+data.email+"</td><td>"+data.email+"</td><td>"
                              +data.phone_no+"</td><td>"+data.created_at+"</td><td>"+data.updated_at+"</td><td><button class='btn btn-primary btn-sm'> <i class='fa fa-plus fa-fw'></i> View</button><button class='btn btn-primary btn-sm' > <i class='fa fa-plus fa-fw'></i> Edit</button>  </td>    ");
                             }

                             toastr.success('Successfully added User!', 'Success Alert', {timeOut: 5000});


                            }

                             

                          },

                          //closere for success function

                          error:function(data){

                            alert((data.errors));

                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                              



                          

                          }

                        })



                    });

             



              // Show a user info

              $(document).on('click', '#show-user', function() {

                // alert('user info');

                  // $('.modal-title').text('Show');

                  $('#name_show').val($(this).data('name'));

                  $('#email_show').val($(this).data('email'));

                  $('#role_show').val($(this).data('role'));

                  $('#show-user-Modal').modal('show');

              });



                            // edit a user info

              $(document).on('click', '#edit-user', function() {

                // alert('user info');

                  // $('.modal-title').text('Show');

                  $('#id_edit').val($(this).data('id'));

                  $('#name_edit').val($(this).data('name'));

                  $('#email_edit').val($(this).data('email'));

                  $('#role_edit').val($(this).data('role'));

                  $('#edit-user-Modal').modal('show');

                  // $("#user-edit-inst").attr("action",$(this).data('id'));



              });

               $('#user-edit-inst').on('submit',function(e){

               

                 

                      e.preventDefault();

                      var data=$(this).serialize();

                      var id=$('#id_edit').val();

                      var url=$(this).attr('action');

                      var post=$(this).attr('method');

                       // alert(url+'/'+id);

                      //ajax start

                         $.ajax({

                            type:post,

                            url: url+'/'+id,

                            data:data,

                            dataTy:'json',

                            success:function(data){

                              if((data.errors)){

                                  if((data.errors.email)){

                                   $('.errorEmail').removeClass('hidden');

                                   $('.errorEmail').text(data.errors.email);

                                  }

                                  if((data.errors.password)){

                                    $('.errorPassword').removeClass('hidden');

                                    $('.errorPassword').text(data.errors.password);

                                  }

                                  if((data.errors.name)){

                                    $('.errorName').removeClass('hidden');

                                    $('.errorName').text(data.errors.name)

                                  }

                                }

                                else{

                                    toastr.success('Successfully updated User!', 'Error Alert', {timeOut: 5000});     

                                }

                             

                            },

                            error:function(){

                                setTimeout(function () {

                                

                                  toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                              }, 500);

                            }

                         })

                      //ajax ends

                   





               });

               ////delete user ajax

                 $(document).on('click', '.delete-modal', function() {



            // $('.modal-title').text('Delete');

            $('#id_delete').val($(this).data('id'));

            $('#name_delete').val($(this).data('name'));

            $('#delete-user-Modal').modal('show');

            id = $('#id_delete').val();

                });

                 $('#dlt-user').on('submit',function(e){

                  // alert('asdf');

                         e.preventDefault(); 

                         var data=$(this).serialize();

                         var id=$('#id_delete').val();

                         var url=$(this).attr('action');

                         var post=$(this).attr('method');



                         alert(id);

                         $.ajax({

                          type:post,

                          url:url+'/'+id,

                          data:data,

                          dataTy:'json',

                          success:function(data){

                            toastr.success('Successfully removed User!', 'Success Alert', {timeOut: 5000});

                            $('.item' + data['id']).remove();

                          },

                          error:function(data){

                             toastr.error('User already removed!', 'Error Alert', {timeOut: 5000});

                          }





                         })



                 });



// batch creat and cruds by admin

             $('#batch_crt').on('submit',function(e){

                     // alert('batch');

                     e.preventDefault();

                     var data=$(this).serialize();

                     // alert(data);

                     var url=$(this).attr('action');

                     var post=$(this).attr('method');

                     

                         $.ajax({

                            type:post,

                            url:url,

                            data:data,

                            dataTy:'json',

                                success:function(data){

                                   if((data.errors)){

                                     if((data.errors.program)){

                                      $('.errorProgram').removeClass('hidden');

                                      $('.errorProgram').text(data.errors.program);

                                     }

                                     if((data.errors.stream)){

                                      $('.errorStream').removeClass('hidden');

                                      $('.errorStream').text(data.error.stream);

                                     }

                                     if((data.errors.sem_year)){

                                      $('.errorSem_year').removeClass('hidden');

                                      $('.errorSem_year').text(data.error.semester);

                                     }

                                     if((data.errors.semester)){

                                      $('.errorSemester').removeClass('hidden');

                                      $('.errorSemester').text(data.error.semester);

                                     }

                                     if((data.errors.semester)){

                                      $('.errorBatch').removeClass('hidden');

                                      $('.errorBatch').text(data.error.batch_name);

                                     }

                                     if((data.errors.semester)){

                                      $('.errorCode').removeClass('hidden');

                                      $('.errorCode').text(data.error.batch_code);

                                     }

                                  }

                                  else{

                                      toastr.success('Successfully added Batch!', 'Success Alert', {timeOut: 5000});   

                                  }

                                  

                                },

                                error:function(errors){

                                  

                                  toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});

                                }

                          

                         })



                 });                 
                 $('#batch_crt_non').on('submit',function(e){

                     // alert('batch');

                     e.preventDefault();

                     var data=$(this).serialize();

                     // alert(data);

                     var url=$(this).attr('action');

                     var post=$(this).attr('method');

                     

                         $.ajax({

                            type:post,

                            url:url,

                            data:data,

                            dataTy:'json',

                                success:function(data){

                                   if((data.errors)){

                                     if((data.errors.program)){

                                      $('.errorProgram').removeClass('hidden');

                                      $('.errorProgram').text(data.errors.program);

                                     }

                                     if((data.errors.stream)){

                                      $('.errorStream').removeClass('hidden');

                                      $('.errorStream').text(data.error.stream);

                                     }

                                     if((data.errors.sem_year)){

                                      $('.errorSem_year').removeClass('hidden');

                                      $('.errorSem_year').text(data.error.semester);

                                     }

                                     if((data.errors.semester)){

                                      $('.errorSemester').removeClass('hidden');

                                      $('.errorSemester').text(data.error.semester);

                                     }

                                     if((data.errors.semester)){

                                      $('.errorBatch').removeClass('hidden');

                                      $('.errorBatch').text(data.error.batch_name);

                                     }

                                     if((data.errors.semester)){

                                      $('.errorCode').removeClass('hidden');

                                      $('.errorCode').text(data.error.batch_code);

                                     }

                                  }

                                  else{

                                      toastr.success('Successfully added Batch!', 'Success Alert', {timeOut: 5000});   

                                  }

                                  

                                },

                                error:function(errors){

                                  

                                  toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});

                                }

                          

                         })



                 }); 


               ///add students to batch

             $('#add_stud').on('submit',function(e){
 
                       e.preventDefault(); 

                       var data=$(this).serialize();

                      

                       var url=$(this).attr('action');

                       var post=$(this).attr('method');

                       // alert(url);alert(post);

                       $.ajax({

                        type:post,

                        url:url,

                        data:data,

                        dataTy:'json',

                         success:function(data){



                              toastr.success('Successfully added !', 'Success Alert', {timeOut: 5000});

                            },

                            error:function(errors){

                              

                              toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});

                            }

                       }) 



             });

             //fetch data 

             // $('#prog').on('change',function(e){

             //    // e.preventDefault();

             //  var data=$(this).val();

             //                alert(data);

             //                $.ajax({

             //                  type:'POST',

             //                  url:'admin/program',

             //                  data:data,

             //                  dataTy:'text',

             //                  error:function(data){

             //                    alert('asdf');

             //                    $('#stream').html(data);

             //                  }

             //                })

             // });

             //



             //admin-course create

             $('#crt_course').on('submit',function(e){

              // alert('sachin');

              e.preventDefault();

                var data=$(this).serialize();

                var url=$(this).attr('action');

                var post=$(this).attr('method');

               

                var title=  $('input[name=title]').val();

                var code=  $('input[name=course_code]').val();

                var program=  $('select[name=program]').val();

                var stream=  $('select[name=stream]').val();

                var course_category=  $('select[name=course_category]').val(); 

                

                // if(!title){

                  

                //         document.getElementById("titleError").innerHTML = "You must enter a title";

                //         return false;

                // }

                // if(!code){

                //   // alert('name cannot be null');

                //         document.getElementById("codeError").innerHTML = "You must enter a code";

                //         return false;

                // }

                 $.ajax({

                    type:post,

                    url:url,

                    data:data,

                    dataTy:'json',

                            success:function(data){
                              if ((data.errors)) {
                                alert();
                              }


                              toastr.success('Successfully added !', 'Success Alert', {timeOut: 5000});

                            },

                            error:function(errors){

                              

                              toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});

                            }

                 })

             }); 



             //ajax for assigning batch to profeessor

             $('#assignSuscribedBatch').on('submit',function(e){

              

                e.preventDefault();

                var data=$(this).serialize();

                var url=$(this).attr('action');

                var post=$(this).attr('method');

                

                     $.ajax({

                    type:post,

                    url:url,

                    data:data,

                    dataTy:'json',

                            success:function(data){

                           

                              toastr.success('Successfully added !', 'Success Alert', {timeOut: 5000});

                            },

                            error:function(data){

                                 // console.log(errors);

                                 toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});



                            }

                 })

             });

             $('#assignPrescribedBatch').on('submit',function(e){

              

                e.preventDefault();

                var data=$(this).serialize();

                var url=$(this).attr('action');

                var post=$(this).attr('method');

                

                     $.ajax({

                    type:post,

                    url:url,

                    data:data,

                    dataTy:'json',

                            success:function(data){

                           

                              toastr.success('Successfully added !', 'Success Alert', {timeOut: 5000});

                            },

                            error:function(data){

                                 // console.log(errors);

                                 toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});



                            }

                 })

             });

             //assign course to batch

             $('.assigncourseTobatch').on('submit',function(e){

               // alert();

                e.preventDefault();

                var data=$(this).serialize();

                var url=$(this).attr('action');

                var post=$(this).attr('method');

                

                  $.ajax({

                      type:post,

                      url:url,

                      data:data,

                      dataTy:'json',

                      success:function(data){

                        // console.log(data.errors);

                        toastr.success('Successfully added !', 'Success Alert', {timeOut: 5000});

                      },

                      error:function(data){

                        toastr.error('something is wrong!', 'Error Alert', {timeOut: 5000});

                      }

                  })

             });

             //edit course

              // Show a user info

              $(document).on('click', '#edit-course', function() {

                // alert(val($(this).data('title')));

                // var sac =$(this).serialize();

                // alert(sac);

                  // $('.modal-title').text('Show');

                  $('#id').val($(this).data('id'));

                  $('#title_edit').val($(this).data('title'));

                  $('#course_code_edit').val($(this).data('course_code'));

                  $('#program_edit').val($(this).data('program'));

                  $('#stream_edit').val($(this).data('stream'));

                  $('#course_price_edit').val($(this).data('price'));

                  $('#course_category_edit').val($(this).data('course_category'));

                  // alert(title_edit);

                  $('#edit-course-Modal').modal('show');

              });

              //update course

              $('#update-course').on('submit',function(e){

                   e.preventDefault();

                  var data=$(this).serialize();

                  var url=$(this).attr('action');

                  var post=$(this).attr('method');

                     $.ajax({

                         type:post,

                         url:url,

                         data:data,

                         dataTy:'json',

                         success:function(data){

                          toastr.success('Successfully Updated Course !', 'Success Alert', {timeOut: 5000});

                        },

                        error:function(data){

                          toastr.error('something went wrong!', 'Error Alert', {timeOut: 5000});

                        }

                     })

              });

              

              //view studnts in a batch by professor

              $(document).on('click','.viwstu',function(e){

    // alert();

                var id=$(this).data('id');
// alert(id);
                var url='/view-student/';

                     $.ajax({

                         type:'GET',

                         data:id,

                         url:url+id,

                         dataTy:'json',

                          success:function(data){

                           // alert(data);

                           var dataJSON=JSON.parse(data);

                           var dataCount=dataJSON.length;

                       
                          
                          for (i = 0; i < dataJSON.length; i++) {

                         // alert(dataJSON[i].id);

                         var data=dataJSON[i];
                        
                         
                         $('#postTable').append("<tr class='item'><td>" + data.email + "</td><td>" + data.name + "</td><td>" + data.role + "</td></tr>");

                
                        }

                        $('#studenListModal').modal('show')

                          // toastr.success('Successfully Updated Course !', 'Success Alert', {timeOut: 5000});

                        },

                        error:function(data){

                          toastr.error('something went wrong!', 'Error Alert', {timeOut: 5000});

                        }

                     })

              });


            //view students in batch  by admin(trainning partner)
            $(document).on('click','.viwstuadamin',function(e){

                var id=$(this).data('id');
               // alert(id);
                var url='/admin/view-student/';

                     $.ajax({

                         type:'GET',

                         data:id,

                         url:url+id,

                         dataTy:'json',

                          success:function(data){

                           // alert(data);

                            var dataJSON=JSON.parse(data);

                           var dataCount=dataJSON.length;

                       
                          
                          for (i = 0; i < dataJSON.length; i++) {

                         // alert(dataJSON[i].id);

                         var data=dataJSON[i];
                        
                         
                         $('#postTable').append("<tr class='item'><td>" + data.email + "</td><td>" + data.name + "</td><td>" + data.role + "</td></tr>");

                
                        }

                        $('#studenListModal').modal('show');

                          // toastr.success('Successfully Updated Course !', 'Success Alert', {timeOut: 5000});

                        },

                        error:function(data){

                          toastr.error('something went wrong!', 'Error Alert', {timeOut: 5000});

                        }

                     })

              });
          // 

            $('#remove').on('click',function(e){
             e.preventDefault();
            
             $('.item').remove();
             $('#studenListModal').modal('hide');

            });
          //create admin by super admin

                $('#create_admin').on('submit',function(e){

                     e.preventDefault();

                     var data= $(this).serialize();

                     var url=$(this).attr('action');

                     var post=$(this).attr('method');

                     $.ajax({

                         type:post,

                         data:data,

                         url:url,

                         dataTy:'json',

                          success:function(data){

                            // alert((data));

                            

                            if((data.errors)){

                              toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                              if((data.errors.email)){

                                $('.errorEmail').removeClass('hidden');

                                $('.errorEmail').text(data.errors.email);



                              }if((data.errors.name)){

                                $('.errorName').removeClass('hidden');

                                $('.errorName').text(data.errors.name);



                              }if((data.errors.password)){

                                $('.errorPassword').removeClass('hidden');

                                $('.errorPassword').text(data.errors.password);



                              }if((data.errors.c_password)){

                                $('.errorC_password').removeClass('hidden');

                                $('.errorC_password').text(data.errors.c_password);



                              }

                            }else{

                              toastr.success('Admin Created Successfully!', 'alert', {timeOut: 5000});

                            }



                          },

                          error:function(){

                            alert("Some error occured!");

                          }

                     })

                });

                //ajax  for edit ing admin

                $(document).on('click', '#btn-edit-list', function() {

                // alert($(this).attval());

                // var sac =$(this).serialize();

                // alert(sac);

                  // $('.modal-title').text('Show');

                  $('#id').val($(this).data('id'));

                  $('#name_edit').val($(this).data('name'));

                  $('#email_edit').val($(this).data('email'));

                  $('#role_edit').val($(this).data('role'));

                  $('#myModaleditlist').modal('show');

              });

                 $('#edit_admin').on('submit',function(e){

                     e.preventDefault();

                     var id=$('#id').val();

                     var data= $(this).serialize();

                     var url='/super-admin/update-admin';

                     var post=$(this).attr('method');

                     $.ajax({

                         type:post,

                         data:data,

                         url:url+'/'+id,

                         dataTy:'json',

                          success:function(data){

                            // alert((data));

                            

                            if((data.errors)){

                              toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                              if((data.errors.email)){

                                $('.errorEmail').removeClass('hidden');

                                $('.errorEmail').text(data.errors.email);



                              }if((data.errors.name)){

                                $('.errorName').removeClass('hidden');

                                $('.errorName').text(data.errors.name);



                              }if((data.errors.password)){

                                $('.errorPassword').removeClass('hidden');

                                $('.errorPassword').text(data.errors.password);



                              }if((data.errors.c_password)){

                                $('.errorC_password').removeClass('hidden');

                                $('.errorC_password').text(data.errors.c_password);



                              }

                            }else{

                              toastr.success('Admin Updated Successfully!', 'alert', {timeOut: 5000});

                            }



                          },

                          error:function(){

                            alert();

                          }

                     })

                });



                 $(document).on('click', '.delete-modal', function() {

                

            // $('.modal-title').text('Delete');

            $('#id_delete').val($(this).data('id'));

            $('#name_delete').val($(this).data('name'));



            $('#myModaldeletelist').modal('show');



              });

  

             $('#delete_admin').on('submit',function(e){

                   e.preventDefault();

                    var id=$('#id_delete').val()

                    var url='/super-admin/delete-admin'

                   $.ajax({

                         type:'POST',

                         url:url+'/'+id,

                         dataTy:'json',

                         success:function(data){



                            $('.item' + data['id']).remove();

                         }

                 

               })

             });

              

              ///ajax CRUD for trainning partner

              // $('#creat_trainning_partner').on('submit',function(e){

                

              //       e.preventDefault();

              //       var data=$(this).serialize();

              //       var url='/super-admin/store-trainningPartner'

              //       $.ajax({

              //            type:'POST',

              //            data:data,

              //            url:url,

              //            dataTy:'json',

              //            success:function(data){

              //                alert(data);

              //               if((data.errors)){

              //                 toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

              //                 if((data.errors.email)){

              //                   $('.errorEmail').removeClass('hidden');

              //                   $('.errorEmail').text(data.errors.email);



              //                 }if((data.errors.name)){

              //                   $('.errorName').removeClass('hidden');

              //                   $('.errorName').text(data.errors.name);



              //                 }if((data.errors.password)){

              //                   $('.errorPassword').removeClass('hidden');

              //                   $('.errorPassword').text(data.errors.password);



              //                 }if((data.errors.c_password)){

              //                   $('.errorC_password').removeClass('hidden');

              //                   $('.errorC_password').text(data.errors.c_password);



              //                 }

              //               }else{

              //                 toastr.success('Trainning partner Created Successfully!', 'alert', {timeOut: 5000});

              //               }

              //            }

              //       })  

              // });

              // //edit trainning partner

              // $(document).on('click','#btn-edit-trainningPartner',function(e){

              //   e.preventDefault();

               

              //     $('#id').val($(this).data('id'));

              //     $('#name_edit').val($(this).data('name'));

              //     $('#email_edit').val($(this).data('email'));

              //     $('#role_edit').val($(this).data('role'));

              //     $('#myModaledittrainningPartner').modal('show');

              // });

              // $('#edit_trainningPartner').on('submit',function(e){

              //    e.preventDefault();

              //    var id=$('#id').val();

              //    var data=$(this).serialize();

              //    var url ='/super-admin/update-trainningPartner';



              //    $.ajax({

              //      type:'POST',

              //      url:url+'/'+id,

              //      data:data,

              //      dataTy:'json',

              //      success:function(data){

              //           if((data.errors)){

              //                 toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

              //                 if((data.errors.email)){

              //                   $('.errorEmail').removeClass('hidden');

              //                   $('.errorEmail').text(data.errors.email);



              //                 }if((data.errors.name)){

              //                   $('.errorName').removeClass('hidden');

              //                   $('.errorName').text(data.errors.name);



              //                 }if((data.errors.password)){

              //                   $('.errorPassword').removeClass('hidden');

              //                   $('.errorPassword').text(data.errors.password);



              //                 }if((data.errors.c_password)){

              //                   $('.errorC_password').removeClass('hidden');

              //                   $('.errorC_password').text(data.errors.c_password);



              //                 }

              //               }else{

              //                 toastr.success('Trainning partner Updated Successfully!', 'alert', {timeOut: 5000});

              //               }



              //      }



              //    })

              // });



              // $('#delete_trainningPartner').on('submit',function(e){

              //   // alert();

              //       e.preventDefault();

              //       var id=$('#id_delete').val();

              //       var url='/super-admin/delete-trainningPartner';



              //       $.ajax({

              //         type:'POST',

              //         url:url+'/'+id,

              //         dataTy:'json',

              //         success:function(data){

              //           toastr.success('Trainning partner Created Successfully!', 'alert', {timeOut: 5000});

              //           $('.item' + data['id']).remove();



              //         }

              //       })

              // });



              ///ajax CRUD for trainning partner

              $('#creat_trainning_partner').on('submit',function(e){

                   // alert();

                    e.preventDefault();

                    var data=$(this).serialize();

                    var url='/admin/store-trainningPartner'

                    $.ajax({

                         type:'POST',

                         data:data,

                         url:url,

                         dataTy:'json',

                         success:function(data){

                             alert(data);

                            if((data.errors)){

                              toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                              if((data.errors.email)){

                                $('.errorEmail').removeClass('hidden');

                                $('.errorEmail').text(data.errors.email);



                              }if((data.errors.name)){

                                $('.errorName').removeClass('hidden');

                                $('.errorName').text(data.errors.name);



                              }if((data.errors.password)){

                                $('.errorPassword').removeClass('hidden');

                                $('.errorPassword').text(data.errors.password);



                              }if((data.errors.c_password)){

                                $('.errorC_password').removeClass('hidden');

                                $('.errorC_password').text(data.errors.c_password);



                              }

                            }else{

                              toastr.success('Trainning partner Created Successfully!', 'alert', {timeOut: 5000});

                            }

                         }

                    })  

              });

              //edit trainning partner

              $(document).on('click','#btn-edit-trainningPartner',function(e){

                e.preventDefault();

               

                  $('#id_edit').val($(this).data('id'));

                  $('#name_edit').val($(this).data('name'));

                  $('#email_edit').val($(this).data('email'));

                  $('#role_edit').val($(this).data('role'));

                  $('#phone_edit').val($(this).data('phone'));

                  $('#landline_edit').val($(this).data('landline'));

                  $('#address_edit').val($(this).data('address'));

                  $('#website_edit').val($(this).data('website'));

                  $('#professor_edit').val($(this).data('professor_no'));

                  $('#student_edit').val($(this).data('student_no'));

                  $('#auth_name_edit').val($(this).data('auth_name'));

                  $('#auth_email_edit').val($(this).data('auth_email'));

                  $('#auth_phone_edit').val($(this).data('auth_phone'));

                  $('#auth_landline_edit').val($(this).data('auth_landline'));

                  $('#auth_address_edit').val($(this).data('auth_address'));

                  $('#myModaledittrainningPartner').modal('show');

              });

              $('#edit_trainningPartner').on('submit',function(e){

                 e.preventDefault();

                 var id=$('#id_edit').val();

                 var data=$(this).serialize();

                 var url ='/admin/update-trainningPartner';

                  alert(id);

                 $.ajax({

                   type:'POST',

                   url:url+'/'+id,

                   data:data,

                   dataTy:'json',

                   success:function(data){

                        if((data.errors)){

                              toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});

                              if((data.errors.email)){

                                $('.errorEmail').removeClass('hidden');

                                $('.errorEmail').text(data.errors.email);



                              }if((data.errors.name)){

                                $('.errorName').removeClass('hidden');

                                $('.errorName').text(data.errors.name);



                              }if((data.errors.password)){

                                $('.errorPassword').removeClass('hidden');

                                $('.errorPassword').text(data.errors.password);



                              }if((data.errors.c_password)){

                                $('.errorC_password').removeClass('hidden');

                                $('.errorC_password').text(data.errors.c_password);



                              }

                            }else{

                              toastr.success('Trainning partner Updated Successfully!', 'alert', {timeOut: 5000});

                            }



                   }



                 })

              });



              $('#delete_trainningPartner').on('submit',function(e){

                // alert();

                    e.preventDefault();

                    var id=$('#id_delete').val();

                    var url='/admin/delete-trainningPartner';



                    $.ajax({

                      type:'POST',

                      url:url+'/'+id,

                      dataTy:'json',

                      success:function(data){

                        toastr.success('Trainning partner Created Successfully!', 'alert', {timeOut: 5000});

                        $('.item' + data['id']).remove();



                      }

                    })

              });

               //verify admin by super admin



               $('.published').on('click', function(event){

                var id=$(this).data('id');
                
                 var r = confirm("Are you sure?!");
                      if (r ==false) {
                        return false;
                      }

                    $.ajax({

                      type:'GET',

                      url:'/super-admin/verify-admin-status/'+id,

                      dataTy:'json',

                      success:function(data){

                       

                        if (data.is_user_verified == true) {

                            toastr.success('Admin is verified Successfully!', 'alert', {timeOut: 5000}); 

                        }else{



                         toastr.success('Admin is set not verified!', 'alert', {timeOut: 5000}); 

                       

                      }

                        }

                    })



               });



               //

               $('.viewtrainingPtr').on('click',function(e){



                    e.preventDefault();

                    var id=$(this).data('id');

                                  

                    $.ajax({

                       type:'GET',

                       url:'/super-admin/trainningPartnerDesc/'+id,

                       dataTy:'json',

                       success:function(data){

                         $('#name').text(data.name);

                         $('#bth').text(data.bth);

                         $('#prof').text(data.prof);

                         $('#stu').text(data.stu);

                         $('#ModelviewtrainingPtr').modal('show');



                       }

                    })

               });



// Set the date we're counting down to



// Set the date we're counting down to



    var countDownDate = new Date().getTime();



    var time=$("#time").val();



    var times=countDownDate+time*1000*60;

// Update the count down every 1 second

   var x = setInterval(function() {



    // Get todays date and time

    var now = new Date().getTime();

   

    // alert(time);

    // Find the distance between now an the count down date

    var distance = times - now;

    

    // Time calculations for days, hours, minutes and seconds

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    

    // Output the result in an element with id="demo"

    // document.getElementById("demo").innerHTML = days+"d"+hours+"h"+minutes+"m"+seconds+"s" ;

    

    // If the count down is over, write some text 

    if (distance < 0) {

        clearInterval(x);

        document.getElementById("demo").innerHTML = "EXPIRED";

    }

}, 1000);

//calculate the time before calling the function in window.onload

//generate excel 

    var tablesToExcel = (function() {

      

    var uri = 'data:application/vnd.ms-excel;base64,'

    , tmplWorkbookXML = '<?xml version="1.0"?><?mso-application progid="Excel.Sheet"?><Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet">'

      + '<DocumentProperties xmlns="urn:schemas-microsoft-com:office:office"><Author>Axel Richter</Author><Created>{created}</Created></DocumentProperties>'

      + '<Styles>'

      + '<Style ss:ID="Currency"><NumberFormat ss:Format="Currency"></NumberFormat></Style>'

      + '<Style ss:ID="Date"><NumberFormat ss:Format="Medium Date"></NumberFormat></Style>'

      + '</Styles>' 

      + '{worksheets}</Workbook>'

    , tmplWorksheetXML = '<Worksheet ss:Name="{nameWS}"><Table>{rows}</Table></Worksheet>'

    , tmplCellXML = '<Cell{attributeStyleID}{attributeFormula}><Data ss:Type="{nameType}">{data}</Data></Cell>'

    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }

    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }

    return function(tables, wsnames, wbname, appname) {

      var ctx = "";

      var workbookXML = "";

      var worksheetsXML = "";

      var rowsXML = "";

     // alert(tables);

      for (var i = 0; i < tables.length; i++) {

        if (!tables[i].nodeType) tables[i] = document.getElementById(tables[i]);

        for (var j = 0; j < tables[i].rows.length; j++) {

          

          rowsXML += '<Row>'

          for (var k = 0; k < tables[i].rows[j].cells.length; k++) {

            

            var dataType = tables[i].rows[j].cells[k].getAttribute("data-type");



            var dataStyle = tables[i].rows[j].cells[k].getAttribute("data-style");

            var dataValue = tables[i].rows[j].cells[k].getAttribute("data-value");

            dataValue = (dataValue)?dataValue:tables[i].rows[j].cells[k].innerHTML;

            // alert(dataValue);

            var dataFormula = tables[i].rows[j].cells[k].getAttribute("data-formula");

            dataFormula = (dataFormula)?dataFormula:(appname=='Calc' && dataType=='DateTime')?dataValue:null;

            ctx = {  attributeStyleID: (dataStyle=='Currency' || dataStyle=='Date')?' ss:StyleID="'+dataStyle+'"':''

                   , nameType: (dataType=='Number' || dataType=='DateTime' || dataType=='Boolean' || dataType=='Error')?dataType:'String'

                   , data: (dataFormula)?'':dataValue

                   , attributeFormula: (dataFormula)?' ss:Formula="'+dataFormula+'"':''

                  };

            rowsXML += format(tmplCellXML, ctx);

          }

          rowsXML += '</Row>'

        }

        ctx = {rows: rowsXML, nameWS: wsnames[i] || 'Sheet' + i};

        worksheetsXML += format(tmplWorksheetXML, ctx);

        rowsXML = "";

      }



      ctx = {created: (new Date()).getTime(), worksheets: worksheetsXML};

      workbookXML = format(tmplWorkbookXML, ctx);







      var link = document.createElement("A");

      link.href = uri + base64(workbookXML);

      link.download = wbname || 'Workbook.xls';

      link.target = '_blank';

      document.body.appendChild(link);

      link.click();

      document.body.removeChild(link);

    }

  })();

//pdf generation

function demoFromHTML() {

  // alert();

    var pdf = new jsPDF('p', 'pt', 'a4');



    pdf.cellInitialize();

    pdf.setFontSize(10);





    $.each( $('#pdf tr'), function (i, row){

        $.each( $(row).find("td, th"), function(j, cell){

            

            var txt = $(cell).text().trim() || " ";

             // txt.style.width = "100px";

           // var txtt=pdf.textAdd(20, 20, txt);

             // var txtt=$("txt").css("background-color", "yellow");

            // alert(txt);

            var width = (j==4) ? 40 : 70; //make 4th column smaller

            // alert(width);

            pdf.cell(10, 50, 150, 30, txt, i);

        });

    });



    pdf.save('report.pdf');

}



///streams

  $('.editstream').on('click',function(e){

    e.preventDefault();

     var id=$(this).data('id');

    

       $('#stream_id').val($(this).data('id'));                

       $('#stream_edit').val($(this).data('name'));

       $('#ModalstreamEdit').modal('show');



                  

  });

  $('#editstream').on('submit',function(e){

               e.preventDefault();

               var id=$('#stream_id').val();

               // alert(id);

                 var data=$(this).serialize();

                 var url ='/admin/stream/edit/'+id;

                

                 $.ajax({

                  type:'POST',

                  url:url,

                  data:data,

                  dataTy:'json',

                  success:function(data){

                    if ((data.errors)){

                          if ((data.errors.name)){

                            $('.errorName').removeClass('hidden');

                            $('.errorName').show();

                          }

                    }

                    toastr.success(data.name+' is updated successfully!', 'alert', {timeOut: 5000}); 

                  }

                 })



  });

  //add stream 

   $('#addstream').on('submit',function(e){

                e.preventDefault();

                  

                 var id=$('#id').val();

                 var data=$(this).serialize();

                 var url ='/admin/stream/create';

                        

                 $.ajax({

                  type:'POST',

                  url:url,

                  data:data,

                  dataTy:'json',

                  success:function(data){

                    // alert(data);

                    $('#example1').append("<tr class='item"+data.id+"'><td>"+data.name+"</td><td><a href=''><button type='' class='editstream btn btn-sm btn-primary' data-name="+data.name+" data-id="+data.id+">Edit</button></a><a href=''><button type='' class='deletestream btn btn-sm btn-primary' data-id='"+data.id+"' data-name='"+data.name+"'>Delete</button></a>");

                    toastr.success(data.name+' is added successfully!', 'alert', {timeOut: 5000}); 

                  }

                 })

   });

  //stream remove

  $('.deletestream').on('click',function(e){

    e.preventDefault();

      var id=$(this).data('id');

    

       $('#stream_delete').val($(this).data('id'));                

       $('#stream_remove').val($(this).data('name'));

       $('#ModalstreamDelete').modal('show');



                  

  });

  $('#deletestream').on('submit',function(e){

    e.preventDefault();

      var id=$('#stream_delete').val();

      var url ='/admin/stream/delete/';

      // var data=$(this).serialize();



      $.ajax({

                 type:'GET',

                  url:url+id,

                  // data:data,

                  dataTy:'json',

                  success:function(data){

                    toastr.success(data.name+' is removed successfully!', 'alert', {timeOut: 5000}); 

                    // alert(data.id);

                     $('.item' + data['id']).remove();



                  }

      })   

  })

  ///create program

   $('#addProgram').on('submit',function(e){

         e.preventDefault();

          var data=$(this).serialize();

          var url=$(this).attr('action');

          var post=$(this).attr('method');

          // alert(data);

          // alert(url);

          $.ajax({

                  type:post,

                  url:url,

                  data:data,

                  dataTy:'json',

                  success:function(data){

                    if ((data.errors)) {

                       if((data.errors.name)){

                        $('.errorName').removeClass('hidden');

                        $('.errorName').text(data.errors.name);



                        }

                    }else{

                      toastr.success(data.name+' is added successfully!', 'alert', {timeOut: 5000}); 

                    // alert(data.id);

                     $('#programTable').append("<tr class='item" + data.id + "'><td>" + data.name +"</td><td><a href=''> <button type='' class='editprogram btn btn-sm btn-primary'  data-id='"+data.id+"' data-name='"+data.name+"'>Edit</button></a><a href=''><button class='deleteprogram btn btn-sm btn-primary' data-id='"+data.id+"' data-name='"+data.name+"'>Delete</button></a></td></tr>");



                    }

                    

                  }



          })



   });

    $('.editprogram').on('click',function(e){

    e.preventDefault();

     var id=$(this).data('id');

    

       $('#program_id').val($(this).data('id'));                

       $('#program_edit').val($(this).data('name'));

       $('#ModalprogramEdit').modal('show');



                  

  });



    $('#editProgram').on('submit',function(e){

      e.preventDefault();

       var id=$('#program_id').val();

       var url='admin/program/edit/';

       var data=$(this).serialize();

       var post=$(this).attr('method');

       $.ajax({

          type:post,

          data:data,

          url:'/admin/program/edit/'+id,

          dataTy:'json',

          success:function(data){

            // alert(data.errors);

            if((data.errors)){



                    if((data.errors.name)){

                      $('.errorName').removeClass('hidden');

                      $('.errorName').text(data.errors.name);



                    }

            }else{

             toastr.success(data.name+' is updated successfully!', 'alert', {timeOut: 5000});  

            }

             

          }

       })

    });



      $('.deleteprogram').on('click',function(e){

        e.preventDefault();

        var id=$(this).data('id');

    

        $('#program_delete').val($(this).data('id'));                

        $('#program_remove').val($(this).data('name'));

        $('#ModalprogramDelete').modal('show');



                  

  });



    $('#deleteprogram').on('submit',function(e){

    e.preventDefault();

      var id=$('#program_delete').val();

      var url =$(this).attr('action');

            // var data=$(this).serialize();



      $.ajax({

                 type:'GET',

                  url:url+'/'+id,

                  // data:data,

                  dataTy:'json',

                  success:function(data){

                    toastr.success(data.name+' is removed successfully!', 'alert', {timeOut: 5000}); 

                    // alert(data.id);

                     $('.item' + data['id']).remove();



                  }

      })   

  });



    $('#program_add').on('change',function(e){

      var id=this.value;

      // alert(id);

        $.ajax({

           url:'/get/streams/'+id,

           type:'GET',

           dataTy:'json',

           success:function(data){

            // var dat=JSON.parse(data);

            // alert(data[0].orm_stream.name);

            $('#stream_add').append("<option value='"+data[0].orm_stream.id+"'>"+data[0].orm_stream.name+"<option>");

             $('.stream').removeClass('hidden');

             $('.stream').show();

           }

        })

    });


    $('#stream_add').on('change',function(e){
      $('.sem_year').removeClass('hidden');
      $('.sem_year').show();
    });
     $('#year_add').on('change',function(e){
      $('.sem').removeClass('hidden');
      $('.sem').show();
    });
$('#sem_add').on('change',function(e){
  var prg=$('#program_add').val();
  var str=$('#stream_add').val();
  var year=$('#year_add').val();
  var sem=$('#sem_add').val();
// alert(str);
  $.ajax({
     url:'/admin/get-batch',
     type:'POST',
     data:{
          program:prg,
          stream:str,
          sem_year:year,
          semester:sem 
     },
     dataTy:'json',
     success:function(data){
      // var dat=JSON.parse(data);
      // alert(data.length);
      for (var i = data.length - 1; i >= 0; i--) {
        $('#batch_add').append("<option value='"+data[i].id+"'>"+data[i].batch_name+"<option>"); 
      }
      
      $('.sel_batch').removeClass('hidden');
      $('.sel_batch').show();
     }
  })


   
});
    $('#program_add1').on('change',function(e){

      var id=this.value;

      // alert(id);

        $.ajax({

           url:'/super-admin/get/streams/'+id,

           type:'GET',

           dataTy:'json',

           success:function(data){

           

            $('#stream_add').append("<option value='"+data[0].orm_stream.id+"'>"+data[0].orm_stream.name+"<option>");

            

             $('.stream').removeClass('hidden');

             $('.stream').show();

           }

        })

    });



    // $('#getStreamByid').on('change',function(e){

    //   alert();

    //    var id=this.value;

    //    $.ajax({

    //     url:'/get/streamByid/'+id,

    //     dataTy:'json',

    //     type:'GET',

    //     success:function(data){

    //       alert(data);

    //     }

    //    })

    // });

    $('.verifyCourse').on('click',function(e){

        var id=$(this).data('id');

        var r = confirm("Are you sure?!");
        if (r ==false) {
          return false;
        }

          $.ajax({

            type:'GET',

            url:'/super-admin/verify-course-status/'+id,

            dataTy:'json',

            success:function(data){

             

              if (data.is_course_verified == true) {

                  toastr.success("Course" + data.title + " is verified Successfully!", 'alert', {timeOut: 5000}); 

              }else{



               toastr.success("Course " + data.title + " is set not verified!", 'alert', {timeOut: 5000}); 

             

            }

              }

          })

    });



    //course assigning to trainning partner

    $('#assign-course-to-trainning-partner').on('submit',function(e){

      // alert();

       e.preventDefault();

       var data=$(this).serialize();

       // alert(data);

       var url='/admin/assign-course-to-trainning-partner';

        $.ajax({

           type:'POST',

           url:url,

           data:data,

           dataTy:'json',

           success:function(data){

             alert('success');

             toastr.success("Course has been assigned successfully!", 'alert', {timeOut: 5000});

           }

        });

    });



    // $('#assignPrescribedCourseTobatch').on('submit',function(e){

    //   alert();

    // });



    //verify user by super admin

     $('.verifyUser').on('click',function(e){
      
        var id=$(this).data('id');
        // alert(id);
        // alert('Are you sure!');
        var confirmation = confirm("are you sure you ?");
        if (confirmation) {
        
          $.ajax({

            type:'GET',

            url:'/super-sub-admin/verify-user/'+id,

            dataTy:'json',

            success:function(data){

             

              if (data.is_user_verified == true) {

                  toastr.success("User " + data.name + " is verified Successfully!", 'alert', {timeOut: 5000}); 

              }else{



               toastr.success("User " + data.name + " is set not verified!", 'alert', {timeOut: 5000}); 

             

            }

              }

          })}

    });

//enter previous password
$('#previous_pass').on('submit',function(e){
  e.preventDefault();
  // alert();
   var data=$(this).serialize();
   var url=$(this).attr('action');
   var post=$(this).attr('method');

   $.ajax({
     url:url,
     type:post,
     data:data,
     dataTy:'json',
     success:function(data){
      // alert(data);
      if (data === 'true') {
        // alert(data);
        $('#prevPaswordModal').modal('hide');
        $('#exampleModal').modal('show');
      }else{
        // alert('false');  
          $('.errorPrevPassword').removeClass('hidden');

          $('.errorPrevPassword').text('Please entercorrect  Password !'); 
      }
     
     }
   })
 });
  


     //change user password

     $('#change_password').on('submit',function(e){

      e.preventDefault();
      var pass=$('#password').val();
      var con_pass=$('#c_password').val();

      if (pass != con_pass) {
        
        $('.errorPassword').removeClass('hidden');

        $('.errorPassword').text('Password and confirm password must match!'); 
      }
      var data=$(this).serialize();

      var url=$(this).attr('action');

      var post=$(this).attr('method');

      $.ajax({

        url:url,

        type:post,

        data:data,

        dataTy:'json',

        success:function(data){

         if((data.errors)){

              if((data.errors.confirm_password)){

              $('.errorconfirm_password').removeClass('hidden');

              $('.errorconfirm_password').text(data.errors.confirm_password);



              }

         }else{

          toastr.success("Password has been changed successfully", 'Success', {timeOut: 5000});
          $('#exampleModal').modal('hide');

            // alert('success');

         }  

        },

        error:function(){

          toastr.error("Password and confirm passworm must match", 'alert', {timeOut: 5000}); 

        }



      });

     });

     $('#editCategory').on('submit',function(e){
       e.preventDefault();
      
       var id=$('#program_id').val();
       var data=$(this).serialize();
       var url=$(this).attr('action');
       var post=$(this).attr('method'); 

       $.ajax({

        url:url+'/'+id,
        type:post,
        data:data,
        dataTy:'json',
        success:function(data){
          // alert((data));
          // alert(data.id)
          $('.item' + data['id']).remove();
          $('#ModalprogramEdit').modal('hide');
          $('#programTable').append("<tr class='item"+data.id+"'><td>"+data.title+"</td><td><a href =''> <button class='editprogram btn btn-sm btn-primary' data-name='"+data.title+"' data-id='"+data.id+"'>Edit</button></a><a href=''> <button class='deleteprogram btn btn-sm btn-primary' data-name='"+data.title+"' data-id='"+data.id+"'>Delete</button></a><td><tr> ")

        }
       });
        
     });

     $('#deleteCategory').on('submit',function(e){
      e.preventDefault();
      var id=$('#program_delete').val();
       // var data=$(this).serialize();
       var url=$(this).attr('action');
       var post=$(this).attr('method');
       $.ajax({
         url:url+'/'+id,
        type:post,
        // data:data,
        dataTy:'json',
        success:function(data){
           $('#ModalprogramDelete').modal('hide');
           $('.item' + data['id']).remove();
        }
       });
     });