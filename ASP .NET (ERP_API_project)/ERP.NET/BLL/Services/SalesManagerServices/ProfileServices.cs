using BLL.Entities;
using DAL.DataAccessFactory;
using DAL.EF;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace BLL.Services.SalesManagerServices
{
    public class ProfileServices
    {
        public static UserModel myprofile(int id)
        {
            var data = DataAccessFactory.SalesManagerProfileDataAccess().Get(id);

            var user = new UserModel();
            user.username = data.username;
            user.email = data.email;
            user.phone = data.phone;
            user.position = data.position;
            user.address = data.address;
            user.gender = data.gender;
            return user;
        }
      

    }
}
