using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class OrderModel
    {
        public int id { get; set; }
        public int customer_id { get; set; }
        public string order_description { get; set; }
        public string status { get; set; }
        public Nullable<System.DateTime> order_made { get; set; }
        public Nullable<int> total_amount { get; set; }
        public Nullable<System.DateTime> delivered_on { get; set; }
        public string type { get; set; }
    }
}
