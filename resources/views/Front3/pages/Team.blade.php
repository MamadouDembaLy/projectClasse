<!-- Team Area Start -->
<div class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title algin-center"><span>// Our Expert</span>
                    <h2>Senior Team Member</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="team-member">
                    <img src="{{asset('uploads/equipe/'.$team->image)}}" alt="">
                    <div class="team-content">
                        <h3>{{$team->prenom.' '.$team->nom }}</h3>
                        <p>{{$team->poste}}</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Area End -->
