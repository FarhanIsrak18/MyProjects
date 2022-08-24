using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class UserModel
    {
        public int id { get; set; }
        public string profile_pic { get; set; }
        public string firstname { get; set; }
        public string lastname { get; set; }
        public string username { get; set; }
        public Nullable<System.DateTime> dob { get; set; }
        public string email { get; set; }
        public string phone { get; set; }
        public string address { get; set; }
        public string gender { get; set; }
        public string position { get; set; }
        public string type { get; set; }
        public string password { get; set; }
        public Nullable<int> organization_id { get; set; }
        public string user_status { get; set; }
    }
}
