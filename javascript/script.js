

$('.skill-per').each(function(){

    var $this = $(this);
    var per = $this.attr('per');
    $this.css("witdh", per+'%');
    $({animatedValue: 0}).animate({animatedValue: per},{
        duration: 1000,
        step: function(){
            $this.attr('per', Math.floor(this.animatedValue));
        },
        complete: function(){
               $this.attr('per', Math.floor(this.animatedValue) + '%') 
        }
    });

});