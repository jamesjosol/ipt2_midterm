<a href="{{url('authors/'.$user->id)}}" class="btn m-2 usercard align-center {{($user->sex == 'Male') ? 'male' : 'female'}}">
    <div class="row text-dark">
        <div class="col">
            <div class="row mb-2 text-center">
                <div class="col">
                    <img src="{{$user->sex =='Male' ? asset('images/male-icon-blue.png') : asset('images/female-icon-pink.png')}}" class="rounded-circle" alt="" style="width: 70px;">
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <strong>{{$user->name}}</strong>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    Posts: {{$user->posts()->count()}}
                </div>
            </div>
        </div>
    </div>
</a>