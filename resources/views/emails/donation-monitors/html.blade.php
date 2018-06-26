@component('mail::message')

#<a href="mailto:{{ $request->email }}" target="_blank">{{ $request->name  }}</a> Made a Donation!
    
@component('mail::table')    
| Amount         | Date                  | Payment Method  |
| :------------- | :-------------------- | ---------------:|
| ${{ number_format($request->charge->amount/100, 2) }} | {{ \Carbon\Carbon::createFromTimestamp($request->charge->created)->toDayDateTimeString() }} | {{ $request->charge->source->brand }} *{{ $request->charge->source->last4 }} |
@endcomponent

@component('mail::table')    
| Summary     |        |
| :----------- | ------:|
| Donation - General Purpose | ${{ number_format($request->charge->amount/100, 2) }} |
| **Total** | **${{ number_format($request->charge->amount/100, 2) }}** |        
@endcomponent

<?php if($request->comments != '') { ?>
**Comments:**
@component('mail::panel')
    {{ $request->comments }}    
@endcomponent
<?php } ?>

The Taraloka Foundation is a registered 501(c)(3) non-profit organization with the Internal Revenue Service.  Our EIN is 80-0802627 and all donations are tax deductible to the the full extent allowed by law.

The Taraloka Foundation creates opportunities for Himalayan girls by providing education, healthcare, and safe refuge.        

Thanks,<br />
{{ config('view.title') }}

@endcomponent