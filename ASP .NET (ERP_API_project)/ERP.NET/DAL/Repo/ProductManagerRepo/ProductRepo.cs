using DAL.EF;
using DAL.Interfaces.Common;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Repo.ProductManagerRepo
{
    public class ProductRepo:IRepo<Product,int,bool>
    {
        ERPEntities db;
        public ProductRepo(ERPEntities db)
        {
            this.db = db;
        }
        public bool Create(Product obj)
        {
            db.Products.Add(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public bool Delete(int id)
        {
            var obj = Get(id);
            db.Products.Remove(obj);
            int res = db.SaveChanges();
            return res>0;
        }

        public List<Product> Get()
        {
            return db.Products.ToList();
        }

        public Product Get(int id)
        {
            return db.Products.Find(id);
        }

        public bool Update(Product obj)
        {
            var exsts = db.Products.FirstOrDefault(x => x.id == obj.id);
            if(exsts!=null)
            {
                db.Entry(exsts).CurrentValues.SetValues(obj);
                db.SaveChanges();
                return true;
            }
            return false;
        }
    }
}
