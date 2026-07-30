<!DOCTYPE html>
<html>

<head>

<title>Campaign Details</title>

<style>

body{
    background:#0f172a;
    color:white;
    font-family:Arial;
    padding:40px;
}


.card{

    background:#1e293b;
    padding:30px;
    border-radius:15px;
    max-width:700px;
    margin:auto;

}


.badge{

    background:#22c55e;
    padding:8px 15px;
    border-radius:20px;

}


a{

    color:#38bdf8;
    text-decoration:none;

}


</style>

</head>


<body>


<div class="card">


<h1>
{{ $campaign->name }}
</h1>


<p>
{{ $campaign->description }}
</p>


<hr>


<p>
<b>Target Group:</b>

{{ $campaign->target_group ?? 'Not specified' }}

</p>


<p>
<b>Start Date:</b>

{{ $campaign->start_date ?? 'N/A' }}

</p>


<p>
<b>End Date:</b>

{{ $campaign->end_date ?? 'N/A' }}

</p>


<p>

<b>Status:</b>

<span class="badge">

{{ ucfirst($campaign->status) }}

</span>

</p>


<br>


<a href="{{ route('campaigns.index') }}">
← Back to Campaigns
</a>


</div>


</body>

</html>