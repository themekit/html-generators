@extends('html-generators::layouts.docs')

@section('content')
	
<h1>Carousel</h1>
<hr/>
{!!
    Carousel::make()
        ->isPlaying()
        ->addItem(Html::image('holder.js/900x500/auto/#555:#333/text:First slide'))
            ->isActive()
            ->setCaption(['First slide label', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis?'])
        ->addItem(Html::image('holder.js/900x500/auto/#555:#333/text:Second slide'))
            ->setCaption(['Second slide label', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias.'])
        ->addItem(Html::image('holder.js/900x500/auto/#555:#333/text:Third slide'))
            ->setCaption(['Third slide label', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium?'])
!!}
<h3>Usage</h3>
<hr/>
<pre>
Carousel::make()
    ->isPlaying()
    ->addItem(Html::image('holder.js/900x500/auto/#555:#333/text:First slide'))
        ->isActive()
        ->setCaption(['First slide label', 'Caption body text'])
    ->addItem( ... )
    ->addItem( ... )
</pre>
@endsection

@section('footer_scripts')
{{ Html::script('//cdnjs.cloudflare.com/ajax/libs/holder/2.3.1/holder.js') }}
@endsection