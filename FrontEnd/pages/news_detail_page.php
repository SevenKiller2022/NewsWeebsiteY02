<?php
require_once ('../../Backend/db.php');
$NewsID=$_GET['NewsID'];
if($NewsID==null){
    header("location: ../../index.php");
}
$sqlNews="select *  from tbnews where NewID = '$NewsID'";
$sqlresultNews=mysqli_query($conn,$sqlNews);
$sqlCategory="select * from tblcategory";
$sqlResultCategory=mysqli_query($conn,$sqlCategory);
$sqlNewimages="select * from tblnewsimage where NewID = '$NewsID'";
$sqlresultNewsImage=mysqli_query($conn,$sqlNewimages);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ស្ដេចស្នូកឃ័រហ្វីលីពីន និយាយចេញពីចិត្តបែបនេះក្រោយចាញ់កម្ពុជាក្នុងការប្រកួតប៊ីយ៉ាការ៉ុម ៣បាំង</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/index.css'>
    <link rel="icon" href="../../imgs/Hero.jpg">
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
    
    <!--body-->
    <?php if($News=mysqli_fetch_assoc($sqlresultNews)){?>
    <div class="container mb-5" style="background-color: white;">
      <h1> <?php echo $News['NewsTitle'];?>?></h1>
    <!--Title-->
           <div class="row mt-5">
            <div class="col mt-5 text-center" style="background-color: white;">
                <div class="main-txt mt-5"><marquee behavior="scroll" direction="left">
                    <h3 style="color: brown;"><h1> <?php echo $News['NewsTitle'];?></h1></h3>
                </marquee></div>
            </div>
        </div>

        <div class="row mt-2">
            <h5 style="font-size: 10; color: gray;"><?php echo $News['NewsDateTime'];?>3</h5>
        </div>
        <?php while ($NewsImage=mysqli_fetch_assoc($sqlresultNewsImage)){?>
    <!--Image-->
    <img src="../../imgs/<?php echo $NewsImage['NewsImageURL'];?>" alt="" srcset="" width="50%" height="50%">

    <!--Detail-->

    <div class="news-detail mt-4">
    <p><?php echo $News['NewsDetail'];?></p>
    </div>
<?php }}?>


 <!--Recomment by Category-->
 <div class="row mt-5">
    <div class="title-recomment"><h2 style="font-weight: bold;">Recent News</h2></div>
 <div class="col-sm-6 col-lg-3 mt-2 box-main">
            <div class="imgs mt-4">
              <img src="../../imgs/01.jpg" alt="" width="100%" height="50%">
            </div>
            <div class="detail mt-4">
              <h1 class="text-center">កូន​សេដ្ឋី​ថៃ ម្ចាស់​សណ្ឋា</h1>
              <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora consequatur rerum, hic enim quam, vitae facilis eaque est, labore expedita illo eius dolores? Fugit asperiores veniam architecto, itaque aperiam ipsa.</p>
            </div>

          </div>
$
          <div class="col-sm-6 col-lg-3 mt-2 box-main">
            <div class="imgs mt-4">
              <img src="../../imgs/01.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="detail mt-4">
              <h1 class="text-center">កូន​សេដ្ឋី​ថៃ ម្ចាស់​សណ្ឋា</h1>
              <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora consequatur rerum, hic enim quam, vitae facilis eaque est, labore expedita illo eius dolores? Fugit asperiores veniam architecto, itaque aperiam ipsa.</p>
            </div>

          </div>
          <div class="col-sm-6 col-lg-3 mt-2 box-main">
            <div class="imgs mt-4">
              <img src="../../imgs/01.jpg" alt="" width="100%" height="50%">
            </div>
            <div class="detail mt-4">
              <h1 class="text-center">កូន​សេដ្ឋី​ថៃ ម្ចាស់​សណ្ឋា</h1>
              <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora consequatur rerum, hic enim quam, vitae facilis eaque est, labore expedita illo eius dolores? Fugit asperiores veniam architecto, itaque aperiam ipsa.</p>
            </div>

          </div>

          <div class="col-sm-6 col-lg-3 mt-2 box-main">
            <div class="imgs mt-4">
              <img src="../../imgs/01.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="detail mt-4">
              <h1 class="text-center">កូន​សេដ្ឋី​ថៃ ម្ចាស់​សណ្ឋា</h1>
              <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora consequatur rerum, hic enim quam, vitae facilis eaque est, labore expedita illo eius dolores? Fugit asperiores veniam architecto, itaque aperiam ipsa.</p>
            </div>

          </div>
 </div>







    </div>

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

</body>
</html>