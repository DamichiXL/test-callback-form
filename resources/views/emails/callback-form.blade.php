@component('mail::message')
# New Callback Request

@component('mail::table')
| Column        | Value           |
| ------------- | --------------- |
| Firstname     | {{$firstname}}  |
| Lastname      | {{$lastname}}   |
| Email         | {{$email}}      |
@endcomponent

@endcomponent
