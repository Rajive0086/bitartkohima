<head>
    <title>Job Post</title>
</head>
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <p class=has-text-Info style="margin-top: 10px;margin-left:10px;">
        <a href="#" class="title sidebar-toggle is-4  has-text-info" data-toggle="push-menu" role="button">
        <i class="fas fa-bars"></i>
        </a>Job Post
      </p> 
       
      </h1>
    </section>
    <section class="content">

      <main class="column main">
        <div class="container has-text-centered">
                <div class="column is-8 is-offset-2">
                   
                    <div class="box">
                      
                        <form method="post" action="<?=base_url('emp_cont/Jpost')?>">
                            <div class="field">
                                <div class="control">
                                    <label>Company Name</label>
                                    <input class="input" name="company"  autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                <label>Location of Job (city/state)</label>
                                    <input class="input" name="location"  >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                <label>Job title</label>
                                    <input class="input" name="title"  >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                <label>Job Discription</label>
                               
                                    <textarea class="textarea is-info" name=disc placeholder="Info textarea"></textarea>
                                
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                <label>Salary (optional)</label>
                                    <input class="input" name="salary"  >
                                </div>
                            </div>
                
               
                            </div>
                            <button class="button is-block is-info">Post</button>
                        </form>
                    </div>
                  
                </div>
            </div>
    
      </main>
    </div>
  </div>
        <div class="hero-body">
            
        </div>
    </section>

</body>

<!-- .Footer -->
