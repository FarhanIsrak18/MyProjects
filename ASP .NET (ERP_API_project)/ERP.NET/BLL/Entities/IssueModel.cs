using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class IssueModel
    {
        public int id { get; set; }
        public string issue_name { get; set; }
        public string description { get; set; }
        public string issued_by { get; set; }
        public Nullable<System.DateTime> issue_time { get; set; }
        public string status { get; set; }
    }
}
