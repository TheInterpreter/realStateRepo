@if(session('message'))
<div class='alert alert-success'>
    {{ session('message') }}
</div>
@endif @if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

<div class="absolutist" style="position:relative;">
<form class="solid-element timesfont" method="POST" action="/contact" enctype="multipart/form-data" style="border-radius:14px; padding-left:1%; margin-top:10%;">
<div class="form-title timesfont" style="text-align:center;"><h1 class="timesfont">Contact us using this form</h1>
<h2 class="timesfont">or call us to  <span class="highlight timesfont">1-888-854-4736 <i class="fas fa-phone icon"></i></span></h2>
<div class="absolutist" style="position:relative;">
</div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="form-group col-md-3">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" >
        </div>
        <div class="form-group col-md-3">
            <input type="input" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group col-md-3">
            <label for="reason">Reason of contact</label>
            <select id="reason" name="reason" class="form-control" >
                <option selected>Select...</option>
                <option value="Information" checked>Information</option>
                <option value="Buying">Buying</option>
                <option value="Selling">Selling</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="address" name="address" placeholder="What floorplan are you interested in?">
    </div>


    <div class="form-group">
        <input type="text" class="form-control" id="address2" name="address2" placeholder="What home are you interested in?">
    </div>

    <div class="form-group">
        <label for="reason">Manufactured homes</label>
        <select id="homes" name="homes" class="form-control" >
            <option selected>Select...</option>
            <option value="HUD" checked>HUD</option>
            <option value="Park model RV">Park model RV</option>
        </select>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="city" name="city" placeholder="City">
        </div>

        <div class="form-group col-md-4">
            <label for="state">State</label>
            <select id="state" class="form-control" name="state" >
                <option selected>Choose...</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            {{-- <label for="inputZip">Zip</label> --}}
            <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
        </div>

        <div class="form-group col-md-12">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="6" title="In case you're interested in schedule a visit to a property, say it's name here and when you would like it to be scheduled. We'll contact you as soon as possible"
                rel="tooltip" data-placement="left"  name="message">
            </textarea>
        </div>
    </div>


    <div class="form-group">
        <div class="form-check">
            <button type="submit" class="btn btn-primary" value="Upload">SUBMIT</button>
        </div>
    </div>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
</div>
