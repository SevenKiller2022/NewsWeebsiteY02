<?php
require_once ('Backend/db.php');
$sqlNews="select *  from tbnews ORDER BY NewID DESC";
$sqlresultNews=mysqli_query($conn,$sqlNews);
$sqlCategory="select * from tblcategory";
$sqlResultCategory=mysqli_query($conn,$sqlCategory);
$sqlNewimages="select * from tblnewsimage";
$sqlresultNewsImage=mysqli_query($conn,$sqlNewimages);
$NewsArray=array();
$NewsImageArray=array();
while($News=mysqli_fetch_assoc($sqlresultNews)){
    $NewsArray[]=$News;
}
while($NewsImage=mysqli_fetch_assoc($sqlresultNewsImage)){
    $NewsImageArray[]=$NewsImage;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ព័ត៌មានTech</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='FrontEnd/css/index.css'>
    <link rel="icon" href="imgs/Hero.jpg">

</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    
 <!--Navbar-->
  
   <div class="navbar fixed-top" id="home">
        <div class="container">
            <div class="logo mt-4">
                <h3>ព័ត៌មាន <span> Tech</span></h3>
                
            </div>
            <div class="nav mt-4">
                <ul>
                    <li><a href="#" id="home">ទំព័រដើម</a></li>
                    <div class="menu-list">
              <li class="nav-item"><a href="#menu" class="nav-link">ព័ត៌មានថ្មីៗ</a>
              
                <!--Menu List-->
                
                 <div class="menu-dropdown mt-0">
                  <ul>
                      <?php while($category=mysqli_fetch_assoc($sqlResultCategory)){?>
                    <li><a href="" target="_blank"><?php  echo $category['CategoryName']?></a></li> <br>
                    <?php }?>
                  </ul>
                 </div>
                 </div>
              </li>
       
                    <li><a href="#history">ជីវប្រវត្តិ</a></li>
                    <li><a href="#about">អំពីយើង</a></li>
                    <li><a href="#contact">ទំនាក់ទំនង</a></li>
                   
                </ul>
            </div>

            <div class="icon-nav mt-3">
                <ul>
                <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <!-- <li><a href=""><i class="fa-solid fa-star"></i></a></li>
                <li><a href=""><i class="fa-solid fa-bars"></i></a></li> -->
                </ul>
            </div>

        </div>
    </div>    

<!--   <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ព័ត៌មាន<span>​ Tech</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </div>
      </nav>     --> 


    <!--Sponsor Section-->
 <div class="container">
        
       
        <div class="main-sponsor alight-items-center text-center mt-5"></div>
           <div class="row">
            <div class="col-md-6 sponsor-txt mt-5 text-center">
                <div class="main-txt mt-5"><h3>សូម   <span> ស្វាគមន៍</span></h3></div>
                <br>
                <div class="sub-txt">
                    <h1>មកកាន់ព័ត៌មាន<span> Tech</span></h1>
                </div>
            </div>
            <div class="col-md-6 sponsor-video mt-5">
                <video autoplay loop muted plays-inline width="100%">
                    <source src="music background/HENG -  'ឧបមារថា' (feat RAVEN BLAZE) [OFFICIAL MV].mp4">
                </video>
            </div>
        </div> 
        
       


   <!--     <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Offcanvas dark navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>   -->
        
        <!--hot-news-->
        <div class="hot-news mt-5" id="hot-news">
        

            <div class="text-center start-header mt-5">
                    <h4>ព័ត៌មានថ្មីៗ</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae consequatur necessitatibus quo, illo fuga aliquid totam beatae tenetur quisquam voluptatum nulla laborum obcaecati rem temporibus odio, officia nesciunt. Porro, quae.</p>
            </div>

        </div>

        <a href="FrontEnd/pages/news_detail_page.php">
        <div class="main-box md-4">
          <div class="row">
            <?php $count = 0; foreach($NewsArray as $News ){ $count=$count+1; ?>
            <div class="col-sm-6 col-lg-6 mt-5 box-main">
              <a class="imgs mt-4" href="FrontEnd/pages/news_detail_page.php?NewsID=<?php echo $News['NewID']?>">
                <img src="imgs/<?php
                $NewID=$News['NewID'];
                foreach ($NewsImageArray as $NewsImage){ if($News['NewID']==$NewsImage['NewID']){echo $NewsImage['NewsImageURL'];break;}}?>" alt="" width="100%" height="700px">

              </a>
              <div class="detail mt-4">
                <h1 class="text-center"><?php echo $News['NewsTitle']?></h1>
                <p class="text-center"> <?php echo $News['NewsDetail']?></p>
              </div>
            </div><?php  if($count==2){break;}}?>
          </div>
        </div>
        </a>

 <!--News List-->
        <div class="hot-news mt-5">
          <div class="text-center start-header mt-5">
                  <h4>ព័ត៌មានថ្ងៃនេះ</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae consequatur necessitatibus quo, illo fuga aliquid totam beatae tenetur quisquam voluptatum nulla laborum obcaecati rem temporibus odio, officia nesciunt. Porro, quae.</p>
          </div>
      </div>

      <div class="row">
      <?php foreach($NewsArray as $News ){?>



        <div class="col-lg-4 mt-2 mb-2">
        <div class="card" style="width: 18rem;">
    <a href="FrontEnd/pages/news_detail_page.php?NewsID=<?php echo $News['NewID']?>">
    <img src="imgs/<?php
              $NewID=$News['NewID'];
              foreach ($NewsImageArray as $NewsImage){ if($News['NewID']==$NewsImage['NewID']){echo $NewsImage['NewsImageURL'];break;}}?>" alt="" width="100%" height="0%">
    </a>
  <div class="card-body">
    <p class="card-text"><?php echo $News['NewsTitle'];?></p>
  </div>
</div>
        </div>
        <?php }?>
      </div>

  

   

        <div class="hot-news mt-5" id="history">
            <div class="text-center start-header mt-5">
                    <h4>ជីវប្រវត្តិ</h4>
                    <p>នេះជាប្រវត្តិរូបសង្ខេបខ្លះៗដែលនឹងនាំអ្នកទាំងអស់គ្នាអោយស្គាល់រូបគាត់​។ Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex error mollitia aut nulla, cupiditate illo. Veritatis, delectus cupiditate eveniet tempore ducimus, in tempora et voluptate, perspiciatis provident dolore illum velit.</p>
            </div>

        <div class="main-history align-items-center text-center mt-5">
          <div class="row align-items-center">

            <div class="col-sm-6 col-lg-6">
              
              <h1>លោក ហុង<span>​​រ៉ាក់ឆៃ</span></h1>
              <h4 class="mt-3">នាយកប្រតិបត្តិរបស់ក្រុមហ៊ុន ព័ត៌មានTech</h4>
              <p>ព័ត៌មានTech ត្រូវបានបង្កើតឡើងដោយលោក <strong>ហុង រ៉ាក់ឆៃ</strong> កាលពីឆ្នាំ២០២២ ដែលលោកជាអ្នកខេត្តកំពង់ចាម។​ នេះគឺជាស្នាដៃក្នុងឆ្នាំទី១នៃការសិក្សាថ្នាក់សកលវិទ្យាល័យ។ គោលបំណងនៃការបង្កើតវេបសាយនេះឡើងគឺក្នុងគោលបំណងដើម្បីសិក្សានិងចែករំលែកចំណេះដឹងទៅកកាន់អ្នកគ្រប់គ្នា។</p>
            </div>

            <div class="col-sm-6 col-lg-6">
               <img src="imgs/Hero.jpg" alt="" width="100%" height="100%">
            </div>

          </div>

        </div>

        <!--About section-->
        <div class="hot-news mt-5" >
          <div class="text-center start-header mt-5" id="about">
                  <h4>អំពីយើង</h4>
                 
          </div>
      </div>

     
      <div class="main-about mt-5">
        <div class="row align-content-center text-center">

          <div class="col-sm-3 col-lg-3 box ml-5 mt-4">
            <div class="img mt-2"><img src="imgs/five.jpg" alt="" width="100%" height="100%"></div>
            <div class="detail mt-3">
              <h3>Project</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aliquid facilis odio quo inventore excepturi hic reprehenderit doloribus, quasi quae nisi corporis magnam, cumque esse eos ad aliquam vero provident.</p>
              <a href="">see more</a>
            </div>
          </div>

          <div class="col-sm-3 col-lg-3 box ml-5 mt-4">
            <div class="img mt-2"><img src="imgs/four.jpg" alt="" width="100%" height="100%"></div>
            <div class="detail mt-3">
              <h3>Project</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aliquid facilis odio quo inventore excepturi hic reprehenderit doloribus, quasi quae nisi corporis magnam, cumque esse eos ad aliquam vero provident.</p>
              <a href="">see more</a>
            </div>
          </div>

          <div class="col-sm-3 col-lg-3 box ml-5 mt-4">
            <div class="img mt-2"><img src="imgs/three.jpg" alt="" width="100%" height="100%"></div>
            <div class="detail mt-3">
              <h3>Project</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aliquid facilis odio quo inventore excepturi hic reprehenderit doloribus, quasi quae nisi corporis magnam, cumque esse eos ad aliquam vero provident.</p>
              <a href="">see more</a>
            </div>
          </div>

          <div class="main-about mt-5">
            <div class="row align-content-center text-center">
    
              <div class="col-sm-3 col-lg-3 box ml-5 mt-4">
                <div class="img mt-2"><img src="imgs/five.jpg" alt="" width="100%" height="100%"></div>
                <div class="detail mt-3">
                  <h3>Project</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aliquid facilis odio quo inventore excepturi hic reprehenderit doloribus, quasi quae nisi corporis magnam, cumque esse eos ad aliquam vero provident.</p>
                  <a href="">see more</a>
                </div>
              </div>
    
              <div class="col-sm-3 col-lg-3 box ml-5 mt-4">
                <div class="img mt-2"><img src="imgs/four.jpg" alt="" width="100%" height="100%"></div>
                <div class="detail mt-3">
                  <h3>Project</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aliquid facilis odio quo inventore excepturi hic reprehenderit doloribus, quasi quae nisi corporis magnam, cumque esse eos ad aliquam vero provident.</p>
                  <a href="">see more</a>
                </div>
              </div>
    
              <div class="col-sm-3 col-lg-3 box ml-5 mt-4">
                <div class="img mt-2"><img src="imgs/three.jpg" alt="" width="100%" height="100%"></div>
                <div class="detail mt-3">
                  <h3>Project</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aliquid facilis odio quo inventore excepturi hic reprehenderit doloribus, quasi quae nisi corporis magnam, cumque esse eos ad aliquam vero provident.</p>
                  <a href="">see more</a>
                </div>
              </div>

          



          <!--Contact Section-->
          <div class="contact">
          <div class="hot-news mt-5" id="contact">
            <div class="text-center start-header mt-5">
                    <h4>ទំនាក់ទំនង</h4>
                   
            </div>
        </div>



        <div class="row align-items-center text-center mt-5">

          <div class="col-lg-6 align-content-center mt-5 main-header">
            <div class="header">
              <h2>គំនិតរបស់អ្នក<span>ពិតជាសំខាន់</span></h2>
              <div class="row mt-5">
                <div class="col-lg-3">
                  <h5>Full Name</h5>
                  <h5 class="mt-2">Email</h5>
                  <h5 class="mt-2">Address</h5>
                </div>
                <div class="col-lg-3">
                  <input type="text" placeholder="Enter your name">
                 
                  <input class="mt-2" type="email" name="" id="email" placeholder="Email">
                  <input type="text" name="" id="" class="mt-2" placeholder="Adreess">
                </div>
                <input type="text" class="mt-3 text-center" style="Padding-bottom: 100px;" placeholder="Inbox">
                <button type="btn" class="bg-danger btn text-white">Send</button>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="imgs/six.jpg" alt="" width="100%" height="100%">
          </div>
        
        </div>

      </div>


        </div>
      </div> </div> </div> </div></div></div>


     <!--Footer-->

     <div class="footer1">
      <div class="container" >
        <div class="row">
          <div class="col-lg-4 list1">
            <h5 class="mt-5" style="color: white; font-weight: bold; ">ស្វែងយល់អំពីពួកយើង</h5>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%; " href="">About Us</a></li></p>
          </div>
          <div class="col-lg-4">
            <h5 class="mt-5" style="color: white; font-weight: bold;">ផ្នែកដែលពេញនិយម</h5>
            <div class="row">
              <div class="col-lg-5">
                <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">ហិរញ្ញវត្ថុ</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">មុខរបរកសិកម្ម</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">អចលនទ្រព្យ</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">មុខរបរបច្ចេកវិទ្យា</a></li></p>
     
              </div>
              <div class="col-lg-7">
                <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">ភាពជាអ្នកដឹកនាំ</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">ចាប់ផ្តើមអាជីវកម្ម</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">កំពូលអ្នកលក់</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%;" href="">ព័ត៌មានថ្មីៗ</a></li></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h5 class="mt-5" style="color: white; font-weight: bold; ">ទំនាក់ទំនងមកពួកយើង</h5>
           <div class="contact">
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%; " href="">Email: khrakchhai098@gmail.com</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%; " href="">Facebook: Hong Rakchhai</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%; " href="">Youtube: Hong Rakchhai</a></li></p>
            <p><li style="list-style-type: none; "><a style="color: white; opacity: 90%; " href="">Telegram: 081 524 256</a></li></p>
           </div>
          </div>
        </div>
      </div>
     </div>

     <div class="footer2">
      <div class="container">
        <div class="row">
          <h5 class="text-center mt-5" style="color: white;">@2022 copyright Hong Rakchhai || All Right Reserved</h5>
          <p class="text-center" style="color: white;">Develop by Hong Rakchhai</p>
        </div>
      </div>
     </div>
      

  
      
   
      


        
       

   <!--    <button type="button" class="btn btn-primary" id="liveToastBtn">Click Here</button>
       <div class="toast-container position-fixed bottom-0 end-0 p-3 bg-primary">
        <div class="toast " id="liveToast" role="alert" aria-live="assertive" aria-atomic="true"></div>
        <div class="toast-header">
          <img src="" alt="" class="rounded me-2">
          <strong class="me-auto">fvgbgbgnhnh</strong>
          <small>11 mins ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Hello mufgbgbgnbhghbgbv
        </div>
       </div> </div>    -->

      













    

  
    

    





    <!--Link-->
   
    <link rel="stylesheet" href="script/bootstrap.min.css">
     <link rel="stylesheet" href="script/bootstrap.min.js">
     <link rel="stylesheet" href="script/jquery-3.2.1.slim.min.js">
     <link rel="stylesheet" href="script/popper.min.js">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link rel="stylesheet" href="js/index.js">




</body>


</html>