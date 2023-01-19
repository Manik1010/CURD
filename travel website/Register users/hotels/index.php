<title>tour guide</title>
<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:../../login system/login_form.php');
}

include'../include/register_header.php';
?>
<section class="tourguide">

   <h1 class="heading-title">Hotels</h1>

  <div class="input-group mb-3" style="display:block;margin-bottom: 150px;">
     <input type="text" class="form-control" placeholder="type resort name" aria-label="Recipient's username" aria-describedby="basic-addon2">
     <button class="btn " style="float:right;">Search </button> 
 </div> 
   
   <div class="row" style="">
      <div class="col-md-3 sidebar" style="background-color: lightgray; width:200px; display: block;padding: 0;margin-left: 16px; position: relative;">
         <h3 style="background-color:black; color: white;margin: 0;padding: 7px;">Select District</h3>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none; hover:blue;"href="">Sylhet</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Dhaka</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Comilla</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Barishal</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Chittagong</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Khulna</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Rajshahi</a>
         <a style="margin: 0;display: block;font-size: 20px;padding: 7px;border: 1px solid black;text-decoration: none;"href="">Mymensingh</a>
      </div>
      <div class="col-md-9" style="display: block;padding: 0;margin-left: 18px;margin-right: 0;border: 1px solid black;border-radius: 5px; height: 650px;overflow: scroll;">
            <h2 style="margin:0;padding: 5px;">Sylhet Division</h2>
            <div class="row" style="display: block;border: 1px solid black;margin: 10px;border-radius: 10px;">
               <div class="col-md-3"><img src="../../images/img-3.jpg"width="200" height="180"style="margin-left:-15px; border-radius:10px 0  0 10px;"></div>
               <div class="col-md-6">
                  <h4>Shoilokuthi Eco Resort</h4>
                  <img src="../../images/location.png" width="20" height="20"> Alikadam
                  <img src="../../images2/time.png" width="20" height="20"> Available
                  <div class="row">
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                  </div> 
               </div>
               
               <div class="col-md-1"><hr style=" border-left: 1px solid gray;height: 180px;margin: 0;"></div>
               <div class="col-md-2">
                  <h6>Starting From</h6>
                  <h3 style="margin-top: 0;">1500৳</h3>
                  <button class="btn" style="width: 100px;padding: 5px;margin: 0;">see details</button>
               </div>
            </div>
            <div class="row" style="display: block;border: 1px solid black;margin: 10px;border-radius: 10px;">
               <div class="col-md-3"><img src="../../images/img-4.jpg"width="200" height="180"style="margin-left:-15px; border-radius:10px 0  0 10px;"></div>
               <div class="col-md-6">
                  <h4>Shoilokuthi Eco Resort</h4>
                  <img src="../../images/location.png" width="20" height="20"> Alikadam
                  <img src="../../images2/time.png" width="20" height="20"> Available
                  <div class="row">
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                  </div> 
               </div>
               
               <div class="col-md-1"><hr style=" border-left: 1px solid gray;height: 180px;margin: 0;"></div>
               <div class="col-md-2">
                  <h6>Starting From</h6>
                  <h3 style="margin-top: 0;">1500৳</h3>
                  <button class="btn" style="width: 100px;padding: 5px;margin: 0;">see details</button>
               </div>
            </div>
            <div class="row" style="display: block;border: 1px solid black;margin: 10px;border-radius: 10px;">
               <div class="col-md-3"><img src="../../images/img-5.jpg"width="200" height="180"style="margin-left:-15px; border-radius:10px 0  0 10px;"></div>
               <div class="col-md-6">
                  <h4>Shoilokuthi Eco Resort</h4>
                  <img src="../../images/location.png" width="20" height="20"> Alikadam
                  <img src="../../images2/time.png" width="20" height="20"> Available
                  <div class="row">
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                  </div> 
               </div>
               
               <div class="col-md-1"><hr style=" border-left: 1px solid gray;height: 180px;margin: 0;"></div>
               <div class="col-md-2">
                  <h6>Starting From</h6>
                  <h3 style="margin-top: 0;">1500৳</h3>
                  <button class="btn" style="width: 100px;padding: 5px;margin: 0;">see details</button>
               </div>
            </div>
            <div class="row" style="display: block;border: 1px solid black;margin: 10px;border-radius: 10px;">
               <div class="col-md-3"><img src="../../images/img-5.jpg"width="200" height="180"style="margin-left:-15px; border-radius:10px 0  0 10px;"></div>
               <div class="col-md-6">
                  <h4>Shoilokuthi Eco Resort</h4>
                  <img src="../../images/location.png" width="20" height="20"> Alikadam
                  <img src="../../images2/time.png" width="20" height="20"> Available
                  <div class="row">
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                  </div> 
               </div>
               
               <div class="col-md-1"><hr style=" border-left: 1px solid gray;height: 180px;margin: 0;"></div>
               <div class="col-md-2">
                  <h6>Starting From</h6>
                  <h3 style="margin-top: 0;">1500৳</h3>
                  <button class="btn" style="width: 100px;padding: 5px;margin: 0;">see details</button>
               </div>
            </div>
            <div class="row" style="display: block;border: 1px solid black;margin: 10px;border-radius: 10px;">
               <div class="col-md-3"><img src="../../images/img-5.jpg"width="200" height="180"style="margin-left:-15px; border-radius:10px 0  0 10px;"></div>
               <div class="col-md-6">
                  <h4>Shoilokuthi Eco Resort</h4>
                  <img src="../../images/location.png" width="20" height="20"> Alikadam
                  <img src="../../images2/time.png" width="20" height="20"> Available
                  <div class="row">
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                     <div class="col-md-5" style="border-radius:25px;background-color:lightblue;padding: 10px;margin: 10px;">
                        DOUBLE BED ( 4 PERSON SHARING)
                     </div>
                  </div> 
               </div>
               
               <div class="col-md-1"><hr style=" border-left: 1px solid gray;height: 180px;margin: 0;"></div>
               <div class="col-md-2">
                  <h6>Starting From</h6>
                  <h3 style="margin-top: 0;">1500৳</h3>
                  <button class="btn" style="width: 100px;padding: 5px;margin: 0;">see details</button>
               </div>
            </div>

      </div>
   </div>
   
   


   

</section>

<?php include '../include/footer.php'; ?>