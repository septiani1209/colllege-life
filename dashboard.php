<?php include("includes/function.php") ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <nav class="flex-div">
                <div class="nav-left">
                    <img src="png/logos.png">
                </div>
                <div class="nav-middle flex-div">
                    <div class="search-box flex-div">
                        <input type="text" placeholder="Search">
                        <img src="png/iconsearch.png">
                    </div>
                </div>
                <div class="nav-right flex-div">
                    <img src="png/notif.png" class="notify">
                    <img src="png/profile.png">
                </div>
            </nav>

            <!---------------------sidebar--------------->

            <div class="sidebar">
                <ul class="nav-links">
                    <li> 
                        <a href="">
                            <i class='bx bxs-user'></i>
                            <span class="link-name">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bxs-home'></i>
                            <span class="link-name">Dashboard</span>
                        </a>   
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bxs-calendar'></i>
                            <span class="link-name">Schedule</span>
                        </a>
                    </li>
                    <li>
                        <div class="iocn-link"> 
                            <a href="">
                                <i class='bx bxs-archive'></i>
                                <span class="link-name">Archive</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#">Portofolio</a></li>
                            <li><a href="#">Certificate</a></li>
                            <li><a href="#">Achievement</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="iocn-link"> 
                            <a href="">
                                <i class='bx bxs-trophy'></i>
                                <span class="link-name">Event</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a href="#">Scholarship</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Competition</a></li>
                        </ul>
                    </li>
                    <li>
                    <div class="profile-details">
                        <div class="profile-content">
                            <img src="png/bbh.jpg" alt="profile">
                        </div>
                            <div class="name-job">
                                <div class="profile_name">$user_name</div>
                            </div>
                            <i class='bx bx-log-out'></i>
                        </div>
                    </li>
                </ul>
            </div>

        <!-- Post Field -->

        <div class="container">
            <ul class="wrapper">
                <form method="post" id="f" enctype="multipart/form-data">  
                    <li> 
                        <div class="upload">
                            <div class="add-img">
                                <input type="file" name="upload_image" id="file" size="30" accept="image/*" onchange="showPreview(event);">
                                <label for="file">
                                        <i class='bx bxs-image-add' style='color:#4f3b8f; width: 10px;'></i> &nbsp;
                                </label>
                                <div class="preview">
                                    <img id= "file-preview" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- archive -->
                    <li>
                        <div class="upload">
                            <div class="arc-type">
                                <label style="font-size: 13px; padding-right : 8px;">Type : </label>
                                <select name="category">
                                    <option value="">-- Select ---</option>
                                    <option value="Portofolio">Portofolio</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Etc">etc.</option>
                                </select>
                                <!-- <input type="submit" name="insert" value="INSERT DATA"> -->
                            </div>
                        </div>
                    </li>
                        
                    <li> 
                        <div class="upload">
                            <div class="add-capt">
                                <textarea class="form-control" name="content" id="content" rows="4" placeholder="Post your achievement"></textarea><br>
                            </div>
                        </div>
                    </li>
                        
                    <li> 
                        <div class="upload">
                            <div class="submit">
                                <button type="submit" class="btn" name="sub">
                                    <i class='bx bxs-paper-plane' ></i>
                                    <span>Post</span>
                                </button>
                            </div>
                        </div>
                    </li>     
                </form>
                <?php insertPost(); ?>
            </ul>
        </div>

        <div class="maindash">
            <div class="dashb">
                <!-- <center><h2><strong>DASHBOARD</strong></h2><br></center> -->
                <?php echo get_posts(); ?>
            </div>
        </div>

        <script type="text/javascript">
            let arrow = document.querySelectorAll(".arrow");
            for(var i = 0; i < arrow.length; i++){
            arrow[i].addEventListener("click",(e)=>{
            let arrowParent = e.target.parentElement.parentElement;
            console.log(arrowParent);
            arrowParent.classList.toggle("showMenu");
            });
            }


            function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview");
                preview.src = src;
                preview.style.display = "block";
            }
            }



        </script>

        
    </body>
</html>