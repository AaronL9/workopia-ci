<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('partials/navbar') ?>
<?= $this->include('partials/top-banner') ?>

<section class="flex justify-center items-center mt-20">
  <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
    <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>
    <?= $this->include('partials/errors') ?>

    <form method="POST" action="/create-job">
      <?= csrf_field() ?>
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
        Job Info
      </h2>
      <div class="mb-4">
        <input type="text" name="title" placeholder="Job Title"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('title') ?>" />
      </div>
      <div class="mb-4">
        <textarea name="description" placeholder="Job Description"
          class="w-full px-4 py-2 border rounded focus:outline-none"><?= set_value('description') ?></textarea>
      </div>
      <div class="mb-4">
        <input type="text" name="salary" placeholder="Annual Salary"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('salary') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="requirements" placeholder="Requirements"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('requirements') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="benefits" placeholder="Benefits"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('benefits') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="tags" placeholder="Tags" class="w-full px-4 py-2 border rounded focus:outline-none"
          value="<?= set_value('tags') ?>" />
      </div>
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
        Company Info & Location
      </h2>
      <div class="mb-4">
        <input type="text" name="company" placeholder="Company Name"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('company') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="address" placeholder="Address"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('address') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="city" placeholder="City" class="w-full px-4 py-2 border rounded focus:outline-none"
          value="<?= set_value('city') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="state" placeholder="State" class="w-full px-4 py-2 border rounded focus:outline-none"
          value="<?= set_value('state') ?>" />
      </div>
      <div class="mb-4">
        <input type="text" name="phone" placeholder="Phone" class="w-full px-4 py-2 border rounded focus:outline-none"
          value="<?= set_value('phone') ?>" />
      </div>
      <div class="mb-4">
        <input type="email" name="email" placeholder="Email Address For Applications"
          class="w-full px-4 py-2 border rounded focus:outline-none" value="<?= set_value('email') ?>" />
      </div>
      <button class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
        Save
      </button>
      <a href="/"
        class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none">
        Cancel
      </a>
    </form>
  </div>
</section>
<?= $this->endSection() ?>