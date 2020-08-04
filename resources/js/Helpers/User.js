import Token from './Token';
import AppStorage from './AppStorage';
import VueSimpleAlert from 'vue-simple-alert';


class User {
     login(data){
        axios.post('/api/auth/login',data)
        .then(res => this.responseAfterLogin(res))
        .catch(error => alert(error.response.data.error))
     }

     responseAfterLogin(res){
       const access_token = res.data.access_token
       const username = res.data.user

       if(Token.isValid(access_token)){
          AppStorage.store(username,access_token)
          switch(this.role()){
              case 1:
                window.location = '/#/admin'
                break;
               case 2:
               window.location = '/#/doctor'
               break;
               case 3:
               window.location = '/#/pharmacy'
               break;
               case 4:
                window.location = '/#/nurse'
                break;
                case 5:
                window.location = '/#/labtest'
                break;
          }
       }
     }

     hasToken(){
         const storedToken = AppStorage.getToken();
           if(storedToken){
            return Token.isValid(storedToken) ? true : false
          }
         return false
    }

    loggedIn(){
        return this.hasToken()
    }

    logout(){
        AppStorage.clear()
        window.location = '/'
    }

    name(){
        if(this.loggedIn()){
             return AppStorage.getUser()
        }
    }
    id(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }

    role(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.role
        }
    }
    healthFacility(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
             return payload.location_id
        }
    }
    own(id){
        return this.id == id;
    }

}
export default User = new User();
