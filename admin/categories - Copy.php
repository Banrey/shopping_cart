<?php

include("admin.header.php");
?>

<div class="container my-1 border">
    <div class="row">
        <div class="col-sm-12 "><?php include("navigation.php") ?></div>
        </div>
    </div>
    <div class="container border">
        <div class="row p-2">
            <div class="col-sm-12 ">
                <h3>Categories</h3>
            </div>
        </div>

        <div class="row p-2">
        
            <div class="col-sm-5 ">
                <div class="form-group">
                                    <label>Category</label>   
                                    <input type="text" id="category" class="form-control rounded" placeholder="Category" > 
                                
                </div>
            </div>

            <div class="col-sm-7 ">
                <div class="form-group">
                                        <label>Description</label>   
                                        <input type="text" id="description" class="form-control rounded" placeholder="Description" > 
                                    
                </div>
            </div>
        <div class="row p-2">
            <div class="col-sm-2 ">
                <div class="form-group">
                    <button type="button" id="BtnAddCategory" class="btn btn-warning btn-block">Save Category</button>
                                    
                </div>
            </div>
        <div>

        <div class="row p-2">
            <div class="col-sm-12 ">

            </div>            
        </div>
    </div>
</div>

<script language="javascript">
        $("#BtnLogin").on("click", function() {
                
            var alertNotice = "Fields marked with * are required.";
            

                var username = $("#Username").val();
                var password = $("#Password").val();

                if (username == null || username == "") {
                    alert(alertNotice);
                    $("#Username").focus();
                }
                
                else if (password == null || password == "") {
                    alert(alertNotice);
                    $("#Password").focus();
                }

                else {
                    
                    $.post("process.login.php", {
                        uname: username,
                        pword: password
                    }, function(data,status) {
                        
						if(status == "success"){
                        window.location = "dashboard.php";
						}
                    })
                }
            });


    </script>

<?php
include("admin.footer.php");
