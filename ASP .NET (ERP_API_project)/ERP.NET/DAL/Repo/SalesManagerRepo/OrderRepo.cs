using DAL.EF;
using DAL.Interfaces.Common;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Repo.SalesManagerRepo
{
    public class OrderRepo : IRepo<Order, int, bool>
    {
        ERPEntities db;
        public OrderRepo(ERPEntities db)
        {
            this.db = db;
        }
        public bool Create(Order obj)
        {
            db.Orders.Add(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public bool Delete(int id)
        {
            var obj = Get(id);
            db.Orders.Remove(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public List<Order> Get()
        {
            return db.Orders.ToList();
        }

        public Order Get(int id)
        {
            return db.Orders.Find(id);
        }

        public bool Update(Order obj)
        {
            var exists = db.Orders.FirstOrDefault(x => x.id == obj.id);
            if (exists != null)
            {
                db.Entry(exists).CurrentValues.SetValues(obj);
                db.SaveChanges();
                return true;
            }
            return false;
        }
    }
}
