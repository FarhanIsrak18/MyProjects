using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class CustomerModel
    {
        public int id { get; set; }
        public string name { get; set; }
        public string email { get; set; }
        public string phone { get; set; }
        public string delivery_point { get; set; }
        public Nullable<System.DateTime> first_purchase { get; set; }
        public string type { get; set; }
    }
}
