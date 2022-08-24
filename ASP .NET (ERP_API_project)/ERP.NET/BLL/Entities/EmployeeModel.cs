using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class EmployeeModel
    {

        public int id { get; set; }
        public Nullable<int> employee_id { get; set; }
        public string employee_name { get; set; }
        public string gender { get; set; }
        public string supervisor { get; set; }
        public string present_address { get; set; }
        public string phone { get; set; }
        public string job_position { get; set; }
        public string employee_group { get; set; }
        public Nullable<System.TimeSpan> start_time { get; set; }
        public Nullable<System.TimeSpan> end_time { get; set; }
        public Nullable<int> hours_worked { get; set; }
        public Nullable<System.DateTime> employement_start_date { get; set; }

        public virtual UserModel UserModel { get; set; }
    }
}
