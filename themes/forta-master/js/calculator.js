jQuery(document).ready(function($) {
	jQuery.fn.centerScreen = function(loaded) {
                var obj = this;
                if(!loaded) {
						var newheight= ($(window).height()/2-this.height()/2) + $(window).scrollTop();
                        obj.css('top', newheight);
                        obj.css('left', $(window).width()/2-this.width()/2);
                        $(window).resize(function(){ obj.centerScreen(!loaded); });
                } else {
                        obj.stop();
                        obj.animate({ top: $(window).height()/2-this.height()/2, left: $(window).width()/2-this.width()/2}, 200, 'linear');
                }
        }
		
		function addCommas(nStr)
			{
		
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 + x2;
			}
			
			
	function ErrorCheck(AsphaltRef, AsphaltPriceRef){
		var Asphalt = AsphaltRef;
		var AsphaltPrice = AsphaltPriceRef;
		var Errors;
		
		var CheckAsphalt = Asphalt *1;
		var CheckAsphaltPrice = AsphaltPrice * 1;
		
		
		if(isNaN(CheckAsphalt) || isNaN(CheckAsphaltPrice)){
		
			Errors = "Errors";
		}else{
			Errors = "NoErrors";
		}
		
		return Errors
	}
	
	
	function CalculateSavings(){
		
		$UnitRef = $('input[name=radio]:checked').val();
		//$ReductionRate=.25;
		$ReductionRate=$('#Reduction').val();
		//alert($ReductionRate);
		
		if($UnitRef == 'US TON'){
			$BagPrice = 7.50;
			$Unit = "Tons";
			$Unit2 ="Ton";
		}else{
			$BagPrice = 8.11;
			$Unit = "Metric Tons";	
			$Unit2 ="Metric Ton";	
		}
		
		//ERROR CHECK
		$Asphalt = $('#Asphalt').val();
		$AsphaltPrice = $('#AsphaltPrice').val();
		
		$Asphalt = $Asphalt.replace(/,/g,'');
		$AsphaltPrice = $AsphaltPrice.replace(/,/g,'');
		$AsphaltPrice = $AsphaltPrice.replace('$','');
		
		if($Asphalt == "" || $Asphalt == 0 ){
			$Asphalt = "Nan";
		}
		
		if($AsphaltPrice == "" || $AsphaltPrice == 0){
			$AsphaltPrice = "Nan";
		}
		
		
		$ErrorCheck = ErrorCheck($Asphalt,$AsphaltPrice);
		
		if($ErrorCheck == "NoErrors"){
		
			$Asphalt = parseFloat($Asphalt).toFixed(2);
			$AsphaltPrice = parseFloat($AsphaltPrice).toFixed(2);
			
			$OriginalProjectCost = $Asphalt * $AsphaltPrice;
			$OriginalProjectCost = parseFloat($OriginalProjectCost).toFixed(2);
			
			
			$AsphaltReduction = $Asphalt * $ReductionRate;
			$AsphaltReduction = parseFloat($AsphaltReduction).toFixed(2);
	
			//
			//
			$AdjustedAsphaltCost = ($Asphalt - $AsphaltReduction) * $AsphaltPrice;
			$AdjustedAsphaltCost = parseFloat($AdjustedAsphaltCost).toFixed(2);
			
			//
			$FortaFiPrice = $BagPrice * ($Asphalt - $AsphaltReduction);
			//
			$FortaFiPrice = parseFloat($FortaFiPrice).toFixed(2);
			//
			$RevisedFORTAFiedCost = parseFloat($AdjustedAsphaltCost) + parseFloat($FortaFiPrice);
			$RevisedFORTAFiedCost = parseFloat($RevisedFORTAFiedCost).toFixed(2);
			//
			$MaterialSavings =  $OriginalProjectCost - $RevisedFORTAFiedCost ;
			$MaterialSavings = parseFloat($MaterialSavings).toFixed(2);
			
			//
			
			$('#OriginalProjectCost span').html('$' + addCommas($OriginalProjectCost));
			
			$('#AdjustedAsphaltCost span').html('$' + addCommas($AdjustedAsphaltCost));
			
			$('#FORTAFICost span').html('$' + addCommas($FortaFiPrice));
			$('#RevisedFORTAFiedCost span').html('$' + addCommas($RevisedFORTAFiedCost));
			
			$('#MaterialSavings span').html('$' + addCommas($MaterialSavings));
			$('#ReducedMaterial span').html(addCommas($AsphaltReduction) +' ' + $Unit);
			
			$('#CalcInstructions').hide();
			$('#CalcResults').fadeIn('slow');
			
		
		} else{
		
			alert("Please Enter Valid Numbers");
		
		}		
	}
	
	
	$EnterAsphalt = "Enter Asphalt in Tons";
	$EnterAsphaltPrice = "Enter Asphalt Price per Ton";
	$EnterAsphaltM = "Enter Asphalt in Metric Tons";
	$EnterAsphaltPriceM = "Enter Asphalt Price per Metric Ton";
				
	
	if( $('input[name=radio]:checked').val() == 'US TON'){
		$('#EnterAsphalt').html($EnterAsphalt);
		$('#EnterAsphaltPrice').html($EnterAsphaltPrice);
	}else{
		$('#EnterAsphalt').html($EnterAsphaltM);
		$('#EnterAsphaltPrice').html($EnterAsphaltPriceM);
	}
	
	$('#SelectUnit input').click(function(){
		
		$('#CalcInstructions').fadeIn('slow');;
		$('#CalcResults').hide();		
			
		if($(this).val() == 'US TON'){
				$('#EnterAsphalt').html($EnterAsphalt);
				$('#EnterAsphaltPrice').html($EnterAsphaltPrice);
			}else{
				$('#EnterAsphalt').html($EnterAsphaltM);
				$('#EnterAsphaltPrice').html($EnterAsphaltPriceM);
		}
		
		
	
	});


	$('a.OpenCalc').click(function(e){
		e.preventDefault();
		if($('#ContentOverlay').length != 0){
			$('#ContentOverlay').centerScreen();
			$('#ContentOverlay').fadeIn('slow');
		}else{
			alert("Please use the calculator that is currently on this page");
		}
	})
	
	$('a.CloseCalc').click(function(e){
		e.preventDefault();
		$('#ContentOverlay').fadeOut('slow');
	})


	$('#Calculate').click(function(){
		CalculateSavings();
	});
	
	$('#Reduction').change(function(){
		CalculateSavings();
	});

});