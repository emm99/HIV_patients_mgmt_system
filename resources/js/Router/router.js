import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Login from '../components/Toolbar'
import AdminDashboard from '../components/Admin/dashboard'
import Admin from '../components/Admin/admin'
import Logout from '../components/login/Logout'
import Patient from '../components/Patient/Patients'
import NewPatient from '../components/Patient/NewPatient'
import AdminReport from '../components/Admin/Report'
import Staffs from '../components/Staffs/Staffs'
import NewStaff from '../components/Staffs/NewStaff'
import Doctor from '../components/Doctor/doctor'
import DoctorDashboard from '../components/Doctor/dashboard'
import Consultation from '../components/Doctor/Consultation'
import NewConsultation from '../components/Doctor/NewConsultation'
import ConsultationReport from '../components/Doctor/report'
import Pharmacy from '../components/Pharmacist/pharmacist'
import Prescription from '../components/Pharmacist/prescription'
import NewPrescription from '../components/Pharmacist/newprescription'
import PharmacyDashboard from '../components/Pharmacist/dashboard'
import PrescriptionReport from '../components/Pharmacist/Report'
import NurseDashboard from '../components/Nurse/dashboard'
import NurseReport from '../components/Nurse/Report'
import Nurse from '../components/Nurse/nurse'
import LabTest from '../components/LabTest/labtest'
import LabTestDashboard from '../components/LabTest/dashboard'
import ViewLabTest from '../components/LabTest/labtests'
import LabTestReport from '../components/LabTest/Report'
import NewLabTest from '../components/LabTest/newlabtest'


const routes = [
 { path: '/', component: Login , name:'login'},

 { path: '/admin' , redirect: '/admin/dashboard', component: Admin, name: 'admin',
      children: [
    { path: 'dashboard' , component: AdminDashboard,name:'dashboard' },
    { path: 'staffs' , component:Staffs},
    { path: 'newstaff' , component:NewStaff},
  ]},

  { path: '/doctor' ,redirect: '/doctor/dashboard', component: Doctor , name: 'doctor',
      children: [
    { path: 'dashboard' , component: DoctorDashboard,},
    { path: 'viewpatient' , component: Patient},
    { path: 'newconsultation' , component: NewConsultation},
    { path: 'viewconsultation' , component:Consultation},
  ]},

  { path: '/pharmacy' ,redirect: '/pharmacy/dashboard', component: Pharmacy , name: 'pharmacy',
  children: [
    { path: 'dashboard' , component: PharmacyDashboard},
    { path: 'viewprescription' , component: Prescription},
    { path: 'newprescription' , component: NewPrescription},
]},

{ path: '/nurse' ,redirect: '/nurse/dashboard', component: Nurse , name: 'nurse',
children: [
  { path: 'dashboard' , component: NurseDashboard},
  { path: 'report' , component: NurseReport},
  { path: 'newpatient' , component: NewPatient},
]},

{ path: '/labtest' ,redirect: '/labtest/dashboard', component: LabTest , name: 'labtest',
  children: [
    { path: 'dashboard' , component: LabTestDashboard},
    { path: 'viewlabtest' , component: ViewLabTest},
    { path: 'newlabtest' , component: NewLabTest },
    { path: 'report' , component: LabTestReport},
]},


 { path: '/logout' , component: Logout}
];

const router = new VueRouter({
    routes,
    // hashbang: false,
    // mode: 'history'

})

export default router
