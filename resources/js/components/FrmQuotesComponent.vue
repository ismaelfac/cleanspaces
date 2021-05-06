<template>
    <div>
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-field">
                    <div class="select-wrap">
                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                            <select name="" id="" class="form-control">
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
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                        <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                        <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
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
