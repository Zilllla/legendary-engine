
<div class="container">
  <h2>New Artist Form</h2>
  <form>
    <!--name-->
    <div class="form-group mb-2">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Full Name" />
    </div>

    <!--email-->
    <div class="form-group mb-2">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" />
    </div>

    <!--how did you hear about us - dropdwon -->
    <div class="form-group mb-2">
      <label for="heardAboutUsFrom">How did you hear about us?</label>
      <select class="form-control" id="heardAboutUsFrom">
        <option>Google</option>
        <option>Instagram</option>
        <option>Twitter</option>
        <option>Facebook</option>
      </select>
    </div>

    <!--medium - multiselect -->
    <div class="form-group mb-3">
      <label for="medium">What is your preferred medium? You may select more than one.</label>
      <select multiple class="form-control" id="medium">
        <option>Painting</option>
        <option>Sculpture</option>
        <option>Drawing</option>
        <option>Print</option>
        <option>Photography</option>
        <option>Digital</option>
      </select>
      <small><i>**hold crtl for Windows or command for Mac to select multiple</i></small>
    </div>

    <!--img upload - file -->
    <div class="form-group mb-3">
      <label for="imgs">Upload a sample piece here: </label>
      <input type="file" class="form-control-file" id="imgs" />
    </div>

    <!--additional comments - textarea -->
    <div class="form-group mb-3">
      <label for="textarea">Anything else you'd like to let us know?</label>
      <textarea class="form-control" id="textarea" rows="2"></textarea>
    </div>
  </form>
</div>
