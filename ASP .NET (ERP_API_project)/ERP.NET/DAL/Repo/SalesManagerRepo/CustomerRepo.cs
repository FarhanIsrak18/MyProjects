using DAL.EF;
using DAL.Interfaces.Common;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Repo.SalesManagerRepo
{
    public class CustomerRepo : IRepo<Customer, int, bool>
    {
        ERPEntities db;
        public CustomerRepo(ERPEntities db)
        {
            this.db = db;
        }
        public bool Create(Customer obj)
        {
            db.Customers.Add(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public bool Delete(int id)
        {
            var obj = Get(id);
            db.Customers.Remove(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public List<Customer> Get()
        {
            return db.Customers.ToList();
        }

        public Customer Get(int id)
        {
            return db.Customers.Find(id);
        }

        public bool Update(Customer obj)
        {
            var exists = db.Customers.FirstOrDefault(x => x.id == obj.id);
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
