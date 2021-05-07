<template>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                    <div class="select-wrap">
                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                        <select name="" id="" class="form-control input-space">
                            <option value="">Select Services</option>
                            <option value="">Skylights</option>
                            <option value="">Waterproofing</option>
                            <option value="">Industrial Roofing</option>
                            <option value="">Residential Roofing</option>
                            <option value="">Gutter Cleaning</option>
                            <option value="">Commercial Roofing</option>
                        </select>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control input-space" placeholder="Your Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
<input type="text" class="form-control input-space" placeholder="Email Address">
</div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <div class="input-wrap">
        <div class="icon"><span class="fa fa-calendar"></span></div>
        <input type="text" class="form-control input-space appointment_date" placeholder="Date">
    </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="" id="" cols="30" rows="2" class="form-control input-space" placeholder="Message"></textarea>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            checkedTCU: false,
            checkedICR: false,
            typeDni: [
                { id: 'CC', value:'CC'},
                { id: 'NIT', value: 'NIT'}
            ],
            selectedDni: '',
            dni: '',
            name: '',
            lastName: '',
            businnessName: '',
            email: '',
            password: '',
            repeatPassword: '',
            errors: {
                nameState: true,
            }
        }
    }
}
</script>
<style>
    .input-space {
        padding: 10px !important;
    }
</style>
