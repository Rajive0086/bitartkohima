
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <p class=has-text-Info style="margin-top: 10px;margin-left:10px;">
        <a href="#" class="title sidebar-toggle is-4  has-text-info" data-toggle="push-menu" role="button">
        <i class="fas fa-bars"></i>
        </a>Search
      </p> 
       
      </h1>
    </section>
<section class="content">
        <div class="box">
            <div class="field has-addons">
                <div class="control is-expanded">
                    <input class="input has-text-centered" type="text" name="search_text" id="search_text" placeholder="Type Name, Experiance , Qualification,Reqiurement">
                </div>
                
            </div>
        </div>
        <div id="result">
        
      
        </div>
        
</section>
</div>
</div>
  </div>
        <div class="hero-body" style="height:10px;">
            
        </div>
    </section>
<script>

$(document).ready(function(){
    load_data();

    function load_data(query)
    {
       $.ajax({
           url:"<?php echo base_url() ?>candidatefetch",
           method:"POST",
           data:{query:query},
           success:function(data){
               $('#result').html(data);
           }
       }) 
    }
    $('#search_text').keyup(function()
    {
        var search=$(this).val();
        if(search !='')
        {
            load_data(search);
        }
        else
        {
            load_data();
        }
    });
});
</script>


<!-- .Footer -->
