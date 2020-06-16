@extends('layouts.dashboardstructure')

@section('title','Table')

@section('content')


        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>ເພີ່ມພະນັກງານ</h4>
                  </div>
                  <div class="card-body">
                
                   <form action="{{url('form.update/'.$emps->id)}}" method="POST">
                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-row">
                            <div class="col">
                            <label for="name" class="col-black">ຊື່</label>
                            <input type="text" class="form-control" name="name" placeholder="ກະລຸນາປ້ອນຊື່" value="{{$emps->name}}">
                            </div>
                            <div class="col">
                            <label for="surname" class="col-black">ນາມສະກຸນ</label>
                            <input type="text" class="form-control" name="surname" placeholder="ກະລຸນາປ້ອນນາມສະກຸນ" value="{{$emps->surname}}">
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                        <label for="gender">ເພດ</label>   
                             <div class="form-check">
                            <label class="form-check-label" for="male">ຊາຍ</label>
                            <input type="radio" class="form-check-input" name="gender" id="male" value="ຊາຍ" {{($emps->gender == "ຊາຍ")? "checked":""}}>
                            </div>

                            <div class="form-check">
                            <label class="form-check-label" for="female">ຍິງ</label>
                            <input type="radio" class="form-check-input" name="gender" id="female" value="ຍິງ" {{($emps->gender == "ຍິງ")? "checked":""}}>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="date_of_birth">ວ/ດ/ປ ເກີດ</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{$emps->date_of_birth}}">
                        </div>
                        <div class="form-row">
                            <div class="col">
                            <label for="past_village"  class="col-black">ບ້ານເກີດ</label>
                            <input type="text" name="past_village" class="form-control " placeholder="ກະລຸນາປ້ອນບ້ານເກີດ" value="{{$emps->past_village}}">
                            </div>
                            <div class="col">
                            <label for="past_city" class="col-black">ເມືອງ</label>
                            <input type="text" class="form-control" name="past_city" placeholder="ກະລຸນາປ້ອນເມືອງ" value="{{$emps->past_city}}">
                            </div>
                            <div class="col">
                            <label for="past_province" class="col-black">ແຂວງ</label>
                            <input type="text" class="form-control" name="past_province" placeholder="ກະລຸນາປ້ອນແຂວງ" value="{{$emps->past_province}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <label for="current_village"  class="col-black">ບ້ານຢູ່ປັດຈຸບັນ</label>
                            <input type="text" name="current_village" class="form-control " placeholder="ກະລຸນາປ້ອນບ້ານປັດຈຸບັນ" value="{{$emps->current_village}}">
                            </div>
                            <div class="col">
                            <label for="current_city" class="col-black">ເມືອງ</label>
                            <input type="text" class="form-control" name="current_city" placeholder="ກະລຸນາປ້ອນເມືອງ" value="{{$emps->current_city}}">
                            </div>
                            <div class="col">
                            <label for="current_province" class="col-black">ແຂວງ</label>
                            <input type="text" class="form-control" name="current_province" placeholder="ກະລຸນາປ້ອນແຂວງ" value="{{$emps->current_province}}">
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                        <label for="tel">ເບີໂທ</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                 <div class="input-group-text">
                                 <i class="fas fa-phone"></i>
                                 </div>
                              </div>
                        <input type="text" onkeypress="return isNumber(event)" name="tel" class="form-control" placeholder="ກະລຸນາປ້ອນເບີໂທ" value="{{$emps->tel}}"> 
                            </div>
                         </div>

                         
                        <button type="submit" class="btn btn-primary">ແກ້ໄຂ</button>
                        <a href="{{route('employee')}}" class="btn btn-danger">ຍົກເລີກ</a>
                        <button type="reset" class="btn btn-secondary">ຄ່າເລີ່ມຕົ້ນ</button>
                   </form>
                  
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </section>

        

@endsection

@section('script')
<script>
function isNumber(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }
        </script>
@endsection