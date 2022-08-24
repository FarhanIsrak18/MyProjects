using DAL.EF;
using DAL.Interfaces.Common;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Repo.SalesManagerRepo
{
    public class ProfileRepo : IRepo<User, int, bool>
    {
        private ERPEntities db;

        public ProfileRepo(ERPEntities db)
        {
            this.db = db;
        }

        public bool Create(User obj)
        {
            throw new NotImplementedException();
        }

        public bool Delete(int id)
        {
            throw new NotImplementedException();
        }

        public List<User> Get()
        {
            throw new NotImplementedException();
        }

        public User Get(int id)
        {
            var user = (from e in db.Users
                        where e.id == id
                        select e).FirstOrDefault();
            return user;
        }

        public bool Update(User obj)
        {
            throw new NotImplementedException();
        }

    }
}
