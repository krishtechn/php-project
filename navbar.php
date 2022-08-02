<?php 

$sql = "SELECT * FROM navbar WHERE status = 1";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

?>

<header class="text-gray-600 body-font " style="background:rgb(86, 61, 124)">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src = "./image/logo.jpg" style="width:10%" alt="logo"/>
      <span class="ml-3 text-xl" style="color:white">Technical krish</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
     <?php 
           
      if($num >= 1){
        while($row = mysqli_fetch_assoc($result)){
           ?> 
          <a style="color:white;" class="mr-5 hover:text-gray-900" href="<?=$row["link"]?>"><?=$row["items"]?></a>
      <?php 
      }
      }else{
        echo "data not found";
      }
      ?>
          </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">register
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>