<?phpnamespace App\Model;use Illuminate\Database\Eloquent\Model;class Admin extends Model{    protected $table = 'admin';    public $primaryKey = 'admin_id';    public $timestamps = false;    public function roles()    {        return $this->belongsToMany('App\Model\Role', 'admin_role', 'admin_id', 'role_id');    }}