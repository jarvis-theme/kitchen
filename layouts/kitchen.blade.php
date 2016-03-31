<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }}  
    </head>
    <body>
        <div class="page">
            {{ Theme::partial('header') }} 
            {{ Theme::partial('slider') }} 
            <section id="main-content">
                {{ Theme::place('content') }}  
            </section>
            {{ Theme::partial('footer') }}  
        </div>
        
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }} 
    </body>
</html>