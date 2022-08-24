using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class LeaveRequestModel
    {
        public int id { get; set; }
        public string type { get; set; }
        public string request_description { get; set; }
        public Nullable<System.DateTime> start_time { get; set; }
        public Nullable<System.DateTime> end_time { get; set; }
        public Nullable<System.DateTime> request_made { get; set; }
        public string status { get; set; }
        public Nullable<int> employee_id { get; set; }

        public virtual UserModel UserModel { get; set; }
    }
}
