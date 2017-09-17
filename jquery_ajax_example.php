$.ajax({
                    type:'POST',
                    url:'index.php?&=ajax&m=checkajax&n='+nid+'&s='+status,
                    data : {'id': $id, 'name': $name}, // data to be sennt to the server
                    dataType: '', // type of data you are expecting to retunr from server
                    success:function(response)
                                    { 
                                        alert(response); 

                                        if(status==1)
                                        {
                                            $('#'+nid).text("");
                                            $('#'+nid).append("Active");
                                            $('#'+nid).removeClass("btn-danger");
                                            $('#'+nid).addClass("btn-success");
                                            $('#'+nid).attr("name",1);
                                            
                                        }
                                            
                                        if(!status==1)
                                        {
                                            $('#'+nid).text("");
                                            $('#'+nid).append("Hidden");
                                            $('#'+nid).removeClass("btn-success");
                                            $('#'+nid).addClass("btn-danger");
                                            $('#'+nid).attr("name",0);
                                        }
                                        
                                    },
                    error: function(xhr,err){
                                        alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
                                        alert("responseText: "+xhr.responseText);
                                    }               
                    });
