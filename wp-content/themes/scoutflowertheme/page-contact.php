<?php
/* Template Name: Contact */
get_header();?>
<div class="container" style="min-height: 69vh;">

    <div class="text-center">
        
            <h1 class="titles">Contact Us</h1>
        
            <h5 class="contact-subtitle mt-3">We're happy to help</h5>

            <div class="row contact-box mt-5">
            

            <div class="form col-6">
                <form class="text-center">
                    <div class="form-group row justify-content-center">
                        <input type="text" class="form-control input col-12" placeholder="Name"/>
                    </div>
                    
                    <div class="form-group row justify-content-center">
                        <input type="text" class="form-control input col-12" placeholder="Email"/>
                    </div>
                    
                    <div class="form-group row justify-content-center">
                        <textarea type="text" class="form-control input col-12" placeholder="Let us know what's going on"></textarea>
                    </div>
                    
                    <div class="form-group row justify-content-center">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>

            <div class="contact-info col-6">
                
                <div class="row">
                    <div class="col-4">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    
                    <div class="col-8">
                        <span>+506 84952204</span>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    
                    <div class="col-8">
                        <span>500 sur de hogares Crea San Ramón, Alajuela</span>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    
                    <div class="col-8">
                        <span>exploradores@flor.com</span>
                    </div>
                </div>

                </div>

            </div>
    </div>
</div>

<?php get_footer();?>