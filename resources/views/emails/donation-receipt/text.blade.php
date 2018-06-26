Thank You For Your Donation!

The details are as follows...

    
- ID: {{ $request->charge->id }}
- Amount: ${{ number_format($request->charge->amount/100, 2) }}
- Name: {{ $request->name }}
- Email: {{ $request->email }}
- Reference: {{ $request->charge->source->brand }} *{{ $request->charge->source->last4 }}
- Date: {{ \Carbon\Carbon::createFromTimestamp($request->charge->created)->toDayDateTimeString() }}
- Purpose: General Purpose
<?php if($request->comments != '') { ?>
- Comments: {{ $request->comments }}    
<?php } ?>

Thanks,<br />
{{ config('view.title') }}
