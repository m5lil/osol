<script>
  var requireJS = [];
  loadJS(requireJS, "js/views/charts.js");
</script>

<div class="animated fadeInRight">

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <strong>Basic Form</strong>
          Elements
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group row">
              <label class="col-md-3 form-control-label">Static</label>
              <div class="col-md-9">
                <p class="form-control-static">Username</p>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="text-input">Text Input</label>
              <div class="col-md-9">
                <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Text">
                <span class="help-block">This is a help text</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="email-input">Email Input</label>
              <div class="col-md-9">
                <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Enter Email">
                <span class="help-block">Please enter your email</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="password-input">Password</label>
              <div class="col-md-9">
                <input type="password" id="password-input" name="password-input" class="form-control" placeholder="Password">
                <span class="help-block">Please enter a complex password</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="disabled-input">Disabled Input</label>
              <div class="col-md-9">
                <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="Disabled" disabled="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="textarea-input">Textarea</label>
              <div class="col-md-9">
                <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="select">Select</label>
              <div class="col-md-9">
                <select id="select" name="select" class="form-control">
                  <option value="0">Please select</option>
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="select">Select Large</label>
              <div class="col-md-9">
                <select id="select" name="select" class="form-control form-control-lg">
                  <option value="0">Please select</option>
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="select">Select Small</label>
              <div class="col-md-9">
                <select id="select" name="select" class="form-control form-control-sm">
                  <option value="0">Please select</option>
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="select">Disabled Select</label>
              <div class="col-md-9">
                <select id="disabledSelect" class="form-control" disabled="">
                  <option value="0">Please select</option>
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="multiple-select">Multiple select</label>
              <div class="col-md-9">
                <select id="multiple-select" name="multiple-select" class="form-control" size="5" multiple="">
                  <option value="1">Option #1</option>
                  <option value="2">Option #2</option>
                  <option value="3">Option #3</option>
                  <option value="4">Option #4</option>
                  <option value="5">Option #5</option>
                  <option value="6">Option #6</option>
                  <option value="7">Option #7</option>
                  <option value="8">Option #8</option>
                  <option value="9">Option #9</option>
                  <option value="10">Option #10</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label">Radios</label>
              <div class="col-md-9">
                <div class="radio">
                  <label for="radio1">
                    <input type="radio" id="radio1" name="radios" value="option1"> Option 1
                  </label>
                </div>
                <div class="radio">
                  <label for="radio2">
                    <input type="radio" id="radio2" name="radios" value="option2"> Option 2
                  </label>
                </div>
                <div class="radio">
                  <label for="radio3">
                    <input type="radio" id="radio3" name="radios" value="option3"> Option 3
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label">Inline Radios</label>
              <div class="col-md-9">
                <label class="radio-inline" for="inline-radio1">
                  <input type="radio" id="inline-radio1" name="inline-radios" value="option1"> One
                </label>
                <label class="radio-inline" for="inline-radio2">
                  <input type="radio" id="inline-radio2" name="inline-radios" value="option2"> Two
                </label>
                <label class="radio-inline" for="inline-radio3">
                  <input type="radio" id="inline-radio3" name="inline-radios" value="option3"> Three
                </label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label">Checkboxes</label>
              <div class="col-md-9">
                <div class="checkbox">
                  <label for="checkbox1">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1"> Option 1
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkbox2">
                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2"> Option 2
                  </label>
                </div>
                <div class="checkbox">
                  <label for="checkbox3">
                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3"> Option 3
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label">Inline Checkboxes</label>
              <div class="col-md-9">
                <label class="checkbox-inline" for="inline-checkbox1">
                  <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1">One
                </label>
                <label class="checkbox-inline" for="inline-checkbox2">
                  <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2">Two
                </label>
                <label class="checkbox-inline" for="inline-checkbox3">
                  <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3">Three
                </label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="file-input">File input</label>
              <div class="col-md-9">
                <input type="file" id="file-input" name="file-input">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="file-multiple-input">Multiple File input</label>
              <div class="col-md-9">
                <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="">
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <strong>Inline</strong>
          Form
        </div>
        <div class="card-body">
          <form action="" method="post" class="form-inline">
            <div class="form-group">
              <label for="exampleInputName2">Name</label>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <strong>Horizontal</strong>
          Form
        </div>
        <div class="card-body">
          <form action="" method="post" class="form-horizontal">
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="hf-email">Email</label>
              <div class="col-md-9">
                <input type="email" id="hf-email" name="hf-email" class="form-control" placeholder="Enter Email..">
                <span class="help-block">Please enter your email</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="hf-password">Password</label>
              <div class="col-md-9">
                <input type="password" id="hf-password" name="hf-password" class="form-control" placeholder="Enter Password..">
                <span class="help-block">Please enter your password</span>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <strong>Normal</strong>
          Form
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nf-email">Email</label>
              <input type="email" id="nf-email" name="nf-email" class="form-control" placeholder="Enter Email..">
              <span class="help-block">Please enter your email</span>
            </div>
            <div class="form-group">
              <label for="nf-password">Password</label>
              <input type="password" id="nf-password" name="nf-password" class="form-control" placeholder="Enter Password..">
              <span class="help-block">Please enter your password</span>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Input
          <strong>Grid</strong>
        </div>
        <div class="card-body">
          <form action="" method="post" class="form-horizontal">

            <div class="form-group row">
              <div class="col-sm-3">
                <input type="text" class="form-control" placeholder=".col-sm-3">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <input type="text" class="form-control" placeholder=".col-sm-4">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-5">
                <input type="text" class="form-control" placeholder=".col-sm-5">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder=".col-sm-6">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-7">
                <input type="text" class="form-control" placeholder=".col-sm-7">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder=".col-sm-8">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder=".col-sm-9">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder=".col-sm-10">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-11">
                <input type="text" class="form-control" placeholder=".col-sm-11">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder=".col-sm-12">
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Input
          <strong>Sizes</strong>
        </div>
        <div class="card-body">
          <form action="" method="post" class="form-horizontal">
            <div class="form-group row">
              <label class="col-sm-5 form-control-label" for="input-small">Small Input</label>
              <div class="col-sm-6">
                <input type="text" id="input-small" name="input-small" class="form-control form-control-sm" placeholder=".form-control-sm">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 form-control-label" for="input-normal">Normal Input</label>
              <div class="col-sm-6">
                <input type="text" id="input-normal" name="input-normal" class="form-control" placeholder="Normal">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 form-control-label" for="input-large">Large Input</label>
              <div class="col-sm-6">
                <input type="text" id="input-large" name="input-large" class="form-control form-control-lg" placeholder=".form-control-lg">
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
          <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
      </div>
    </div>
    <!--/.col-->
  </div>
</div>