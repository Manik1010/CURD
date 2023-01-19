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

   <h1 class="heading-title">Tour Guide</h1>
   <hr style="border: 1px solid grey; display: block;left: 20px;">
   <div class="row">
      <div class="col-md-3 sidebar" style="background-color: lightgray; width:200px; display: block;padding: 0;margin-left: 16px;">
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
      <div class="col-md-9" style="display: block;padding: 0;margin-left: 18px;">
            <h2 style="margin:0;padding: 5px;">Sylhet Division</h2>
            <p style="margin:5px; padding: 10px;font-size: 16;text-align: justify;line-height: 25px;">Sylhet Division (Bengali: সিলেট বিভাগ) is the northeastern division of Bangladesh. It is bordered by the Indian states of Meghalaya, Assam and Tripura to the north, east and south respectively, and by the Bangladeshi divisions of Chittagong to the southwest and Dhaka and Mymensingh to the west. Prior to 1947, it included the subdivision of Karimganj (presently in Barak Valley, India). However, Karimganj (including the thanas of Badarpur, Patharkandi and Ratabari) was inexplicably severed from Sylhet by the Radcliffe Boundary Commission. According to Niharranjan Das, it was partly due to a plea from a delegation led by Abdul Matlib Mazumdar.In 1874, the current Sylhet Division, which included Karimganj, was entirely known as the 'Sylhet district'. In September of the same year, Sylhet was separated from mainland Bengal to be made a part of the non-regulation Chief Commissioner's Province of Assam (Northeast Frontier Province) in order to facilitate Assam's commercial development.[18][19] The people of Sylhet submitted a memorandum to the Viceroy protesting the inclusion in Assam.</p>
      </div>
   </div>
   
   <div class="row">
      <h3 style="margin-top: 30px;margin-left: 16px;">Jaflong</h3>
      
      <div class="col-md-9"><p style="margin:5px;padding: 5px;font-size: 16px;line-height: 22px;text-align: justify;">Jaflong (Bengali: জাফলং) is a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests. It is known for its stone collections and is home of the Khasi tribe. <a href="">more..</a> </p></div>
      <div class="col-md-3"><img src="../../images/jaflong.jpg"width="250px" height="200px" style="border-radius:25px;"></div>
   </div>
   <div class="row">
      <h3 style="margin-top: 30px;margin-left: 16px;">Sreemangal</h3>
      
      <div class="col-md-9"><p style="margin:5px;padding: 5px;font-size: 16px;line-height: 22px;text-align: justify;">Sreemangal (Bengali: শ্রীমঙ্গল, romanized: Srimongol) is an upazila of Moulvibazar District[1] in the Sylhet Division of Bangladesh. It is located at the southwest of the district, and borders the Habiganj District to the west and the Indian state of Tripura to the south. Sreemangal is often referred to as the 'tea capital' of Bangladesh, and is most famous for its tea fields. Other than tea, the rubber, pineapple, wood, betel, and lemon industries also exist in the upazila. <a href="">more..</a> </p></div>
      <div class="col-md-3"><img src="../../images/srimangal.jpg" width="250px" height="200px" style="border-radius:25px;"></div>
   </div>
   <div class="row">
      <h3 style="margin-top: 30px;margin-left: 16px;">Madhabkunda</h3>
      
      <div class="col-md-9"><p style="margin:5px;padding: 5px;font-size: 16px;line-height: 22px;text-align: justify;">Jaflong (Bengali: জাফলং) is a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests. It is known for its stone collections and is home of the Khasi tribe. <a href="">more..</a> </p></div>
      <div class="col-md-3"><img src="../../images/img-4.jpg" width="250px" height="200px" style="border-radius:25px;"></div>
   </div>
   <div class="row">
      <h3 style="margin-top: 30px;margin-left: 16px;">Bisnakandi</h3>
      
      <div class="col-md-9"><p style="margin:5px;padding: 5px;font-size: 16px;line-height: 22px;text-align: justify;">Jaflong (Bengali: জাফলং) is a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests. It is known for its stone collections and is home of the Khasi tribe. <a href="">more..</a> </p></div>
      <div class="col-md-3"><img src="../../images/img-3.jpg"width="250px" height="200px" style="border-radius:25px;"></div>
   </div>


   

</section>

<?php include '../include/footer.php'; ?>