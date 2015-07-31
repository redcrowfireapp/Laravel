Laravel Package does not contain html form control. To include it with your package

Step01: Open cmd type 'composer require illuminate/html'

Step02: After the installation goto 'config/app' and find 'providers' where you need to add this line
        Illuminate\Html\HtmlServiceProvider::class,
        
Step03: After that find 'aliases' where again you need to add these line
        'Html'      => Illuminate\Html\HtmlFacade::class,        
        'Form'      => Illuminate\Html\FormFacade::class,
        
Step04: After all of this in your view/xxx.blade.php just add these 4 line to check 
        whther your form controll installation is ok or not.
        {!! Form::open() !!}
          {!! Form::label('name', 'Name:') !!}
          {!! Form::text('name') !!}
	      {!! Form::close() !!}
