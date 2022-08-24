using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class UserLog
    {
        public int UserId { get; set; }
        public string Username { get; set; }
        public string Email { get; set; }
        public DateTime TokenCreatedAt { get; set; }
        public Nullable<System.DateTime> TokenExpiredAt { get; set; }
    }
}
